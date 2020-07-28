import { AuthService } from './../../core/services/auth.service';
import { UserCredentials } from './../../core/models/authentication/user-credentials.interface';
import { Component, OnInit } from '@angular/core';
import { AuthenticationService } from 'src/app/core/authentication/authentication.service';
import { Router, ActivatedRoute } from '@angular/router';
import { ToastrService } from 'ngx-toastr';
import { FormGroup } from '@angular/forms';

@Component({
  selector: 'app-auth-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.scss'],
  providers: [AuthService]
})
export class LoginComponent implements OnInit {

  public componentIsLoading = false;

  public userCredentials: UserCredentials = {
    email: localStorage.getItem('email') ? localStorage.getItem('email') : '',
    password: ''
  };

  public remember: boolean;

  constructor(
    private readonly authService: AuthService,
    private readonly router: Router,
    private readonly route: ActivatedRoute,
    private readonly toastr: ToastrService
  ) { }

  public ngOnInit(): void {

    if (AuthenticationService.isAuthenticated()) {
      this.router.navigate(['/index'], { replaceUrl: true });
    }

    this.remember = !!localStorage.getItem('email');

  }

  public async login(f: FormGroup): Promise<void> {

    if (f.valid) {
      this.componentIsLoading = true;

      const response = await this.authService.login(this.userCredentials, this.remember);
      if (response.type === 'data') {
        this.router.navigate(['/index'], { replaceUrl: true });
      } else {
        response.errors?.forEach(error => {
          this.toastr.error(error.error, error.name.toUpperCase());
        });
      }

      this.componentIsLoading = false;
    }

  }

}

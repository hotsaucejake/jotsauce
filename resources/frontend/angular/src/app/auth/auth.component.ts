import { Component, OnInit } from '@angular/core';
import { FormGroup } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { ToastrService } from 'ngx-toastr';
import { AuthenticationService } from '../core/authentication/authentication.service';
import { UserCredentials } from '../core/models/authentication/user-credentials.interface';
import { AuthService } from '../core/services/auth.service';

@Component({
  selector: 'app-auth',
  templateUrl: './auth.component.html',
  styleUrls: ['./auth.component.scss']
})
export class AuthComponent implements OnInit {

  public loginActive = true;
  public registerActive = false;

  public componentIsLoading = false;

  public userCredentials: UserCredentials = {
    email: localStorage.getItem('email') ? localStorage.getItem('email') as string : '',
    password: ''
  };

  public remember: boolean;

  constructor(
    private readonly authService: AuthService,
    private readonly router: Router,
    private readonly route: ActivatedRoute,
    private readonly toastr: ToastrService
  ) {
    this.remember = !!localStorage.getItem('email');
  }

  public ngOnInit(): void {
    if (AuthenticationService.isAuthenticated()) {
      this.router.navigate(['/index'], { replaceUrl: true });
    }

    this.remember = !!localStorage.getItem('email');
  }

  public switchAuth(): void {
    this.loginActive = !this.loginActive;
    this.registerActive = !this.registerActive;
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

import { AuthService } from './../../core/services/auth.service';
import { UserCredentials } from './../../core/models/authentication/user-credentials.interface';
import { Component, OnInit } from '@angular/core';
import { AuthenticationService } from 'src/app/core/authentication/authentication.service';
import { Router, ActivatedRoute } from '@angular/router';

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

  public remember = true;

  constructor(
    private readonly authService: AuthService,
    private readonly router: Router,
    private readonly route: ActivatedRoute
  ) { }

  public ngOnInit(): void {
    if (AuthenticationService.isAuthenticated()) {
      this.router.navigate(['/index'], { replaceUrl: true });
    }

  }

  public async login(): Promise<void> {
    this.componentIsLoading = true;

    if (!this.remember) {
      localStorage.removeItem('email');
    }

    const response = await this.authService.login(this.userCredentials, this.remember);
    if (response.type === 'data') {
      console.log(response);
    } else {
      console.log(response);
    }

    this.componentIsLoading = false;
  }

}

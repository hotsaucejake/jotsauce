import { AccountAvailability } from './../../core/models/authentication/account-availability.interface';
import { Register } from './../../core/models/authentication/register.interface';
import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { AuthenticationService } from 'src/app/core/authentication/authentication.service';
import { FormGroup } from '@angular/forms';
import { AuthService } from '@app/core/services/auth.service';
import { ToastrService } from 'ngx-toastr';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.scss'],
  providers: [AuthService]
})
export class RegisterComponent implements OnInit {

  public componentIsLoading = false;

  public registerModel = {} as Register;
  public accountAvailability = {} as AccountAvailability;

  public usernameAvailable = false;
  public emailAvailable = false;
  public passwordValid = false;
  public confirmPasswordValid = false;

  constructor(
    private readonly authService: AuthService,
    private readonly router: Router,
    private readonly route: ActivatedRoute,
    private readonly toastr: ToastrService
  ) { }


  public async ngOnInit(): Promise<void> {
    if (AuthenticationService.isAuthenticated()) {
      this.router.navigate(['/index'], { replaceUrl: true });
    }

  }


  public async register(f: FormGroup): Promise<void> {

    if (f.valid) {

      if (this.stringsMatch(f.value.password, f.value.passwordConfirmation)) {
        f.controls[`passwordConfirmation`].setErrors({ mustMatch: false });
        this.componentIsLoading = true;

        const response = await this.authService.register(this.registerModel);
        if (response.type === 'data') {
          localStorage.setItem('email', response.data.email);
          this.router.navigate(['/login'], { replaceUrl: true });
        } else {
          response.errors?.forEach(error => {
            this.toastr.error(error.error, error.name.toUpperCase());
          });
        }

        this.componentIsLoading = false;
      } else {
        f.controls[`passwordConfirmation`].setErrors({ mustMatch: true });
      }

    }
  }


  public async checkUsernameAvailability(f: FormGroup): Promise<void> {
    if (f.controls[`username`].valid) {
      this.accountAvailability.username = this.registerModel.username;
      const checkUsernameResponse = await this.authService.checkUsernameAvailability(this.accountAvailability);
      if (checkUsernameResponse.type === 'data') {
        this.usernameAvailable = checkUsernameResponse.data;
      } else {
        f.controls[`username`].setErrors({ usernameTaken: true });
      }
    }
  }


  public async checkEmailAvailability(f: FormGroup): Promise<void> {
    if (f.controls[`email`].valid) {
      this.accountAvailability.email = this.registerModel.email;
      const checkEmailResponse = await this.authService.checkEmailAvailability(this.accountAvailability);
      if (checkEmailResponse.type === 'data') {
        this.emailAvailable = checkEmailResponse.data;
      } else {
        f.controls[`email`].setErrors({ emailTaken: true });
      }
    }
  }

  public checkPasswordValid(f: FormGroup): void {
    if (f.controls[`password`].valid) {
      this.passwordValid = true;
    }
  }


  public checkConfirmPasswordValid(f: FormGroup): void {
    if (f.controls[`passwordConfirmation`].valid && this.stringsMatch(f.value.password, f.value.passwordConfirmation)) {
      this.confirmPasswordValid = true;
    }
  }


  private stringsMatch(str1: string, str2: string): boolean {
    return str1 === str2;
  }

}

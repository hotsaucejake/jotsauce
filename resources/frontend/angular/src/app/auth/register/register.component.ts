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


  private stringsMatch(str1: string, str2: string): boolean {
    return str1 === str2;
  }

}

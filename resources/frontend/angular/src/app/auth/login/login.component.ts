import { Component, OnInit } from '@angular/core';
import { AuthenticationService } from 'src/app/core/authentication/authentication.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-auth-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.scss']
})
export class LoginComponent implements OnInit {

  constructor(
    private readonly router: Router
  ) { }

  public ngOnInit(): void {
    if (AuthenticationService.isAuthenticated()) {
      this.router.navigate(['/index'], { replaceUrl: true });
    }

  }

}

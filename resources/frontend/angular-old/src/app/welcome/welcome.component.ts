import { Component, OnInit } from '@angular/core';
import { AuthenticationService } from '../core/authentication/authentication.service';
import { Router } from '@angular/router';
import { AuthService } from '@app/core/services/auth.service';

@Component({
  selector: 'app-welcome',
  templateUrl: './welcome.component.html',
  styleUrls: ['./welcome.component.scss'],
  providers: [AuthService]
})
export class WelcomeComponent implements OnInit {

  public isAuthenticated: boolean;

  constructor(
    private readonly authService: AuthService,
    private readonly router: Router
  ) { }

  public async ngOnInit(): Promise<void> {
    this.isAuthenticated = AuthenticationService.isAuthenticated();
  }


  public async logout(): Promise<void> {
    const resp = await this.authService.logout();
    if (resp.type === 'data') {
      this.router.navigate(['/login'], { replaceUrl: true });
    }
  }

}

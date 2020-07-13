import { Component, OnInit } from '@angular/core';
import { AuthenticationService } from '../core/authentication/authentication.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-welcome',
  templateUrl: './welcome.component.html',
  styleUrls: ['./welcome.component.scss']
})
export class WelcomeComponent implements OnInit {

  public isAuthenticated: boolean;

  constructor(
    private readonly router: Router
  ) { }

  ngOnInit(): void {
    this.isAuthenticated = AuthenticationService.isAuthenticated();
  }

}

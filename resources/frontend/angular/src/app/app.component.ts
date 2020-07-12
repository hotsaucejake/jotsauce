import { AuthenticationService } from './core/authentication/authentication.service';
import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent implements OnInit {

  public title = 'Jot Sauce';
  public isAuthenticated: boolean;
  public sidebarOpen: boolean;

  constructor(private readonly router: Router) { }

  public ngOnInit(): void {
    this.isAuthenticated = AuthenticationService.isAuthenticated();
    this.sidebarOpen = true;
  }

  public toggleSidenav(): void {
    this.sidebarOpen = !this.sidebarOpen;
  }

}

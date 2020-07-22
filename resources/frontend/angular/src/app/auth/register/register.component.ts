import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { AuthenticationService } from 'src/app/core/authentication/authentication.service';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.scss']
})
export class RegisterComponent implements OnInit {

  constructor(
    private readonly router: Router
  ) { }


  public async ngOnInit(): Promise<void> {
    if (AuthenticationService.isAuthenticated()) {
      this.router.navigate(['/index'], { replaceUrl: true });
    }

  }


  public async register(): Promise<void> {

  }

}

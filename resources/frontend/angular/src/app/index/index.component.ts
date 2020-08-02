import { User } from './../core/models/user.interface';
import { UserService } from './../core/services/user.service';
import { Component, OnInit } from '@angular/core';
import { AuthService } from '@app/core/services/auth.service';
import { Router } from '@angular/router';
import { BreakpointObserver, Breakpoints } from '@angular/cdk/layout';
import { Observable } from 'rxjs';
import { shareReplay, map } from 'rxjs/operators';

@Component({
  selector: 'app-index',
  templateUrl: './index.component.html',
  styleUrls: ['./index.component.scss'],
  providers: [UserService]
})
export class IndexComponent implements OnInit {

  public isHandset$: Observable<boolean> = this.breakpointObserver.observe(Breakpoints.Handset)
    .pipe(
      map(result => result.matches),
      shareReplay()
    );

  public user: User;

  constructor(
    private readonly authService: AuthService,
    private breakpointObserver: BreakpointObserver,
    private readonly router: Router,
    private readonly userService: UserService
  ) { }

  public async ngOnInit(): Promise<void> {
    const resp = await this.userService.getCurrentUser();
    if (resp.type === 'data') {
      this.user = resp.data;
    }
  }

  public async logout(): Promise<void> {
    const resp = await this.authService.logout();
    if (resp.type === 'data') {
      this.router.navigate(['/login'], { replaceUrl: true });
    }
  }

}

import { Component, OnInit, ChangeDetectionStrategy } from '@angular/core';
import { environment } from '../../../environments/environment';

@Component({
  selector: 'jot-auth',
  templateUrl: './auth.component.html',
  styleUrls: ['./auth.component.scss'],
  changeDetection: ChangeDetectionStrategy.OnPush
})
export class AuthComponent implements OnInit {

  public env = environment;
  public year = new Date().getFullYear();
  public expandedMenu = false;

  constructor() { }

  ngOnInit(): void { }

}

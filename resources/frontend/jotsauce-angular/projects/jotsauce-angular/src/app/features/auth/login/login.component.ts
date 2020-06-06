import { Component, OnInit, ChangeDetectionStrategy } from '@angular/core';
import { FormGroup, FormControl } from '@angular/forms';
import { ROUTE_ANIMATIONS_ELEMENTS } from '../../../core/core.module';

@Component({
  selector: 'jot-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.scss'],
  changeDetection: ChangeDetectionStrategy.OnPush
})
export class LoginComponent implements OnInit {

  public routeAnimationsElements = ROUTE_ANIMATIONS_ELEMENTS;
  public authGroup: FormGroup;

  constructor() { }

  ngOnInit(): void {
    this.authGroup = new FormGroup({
      remember: new FormControl()
    });
  }

}

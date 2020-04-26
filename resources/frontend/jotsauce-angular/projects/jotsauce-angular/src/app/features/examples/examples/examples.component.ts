import { Store, select } from '@ngrx/store';
import { Component, OnInit, ChangeDetectionStrategy } from '@angular/core';
import { Observable } from 'rxjs';

import {
  routeAnimations,
  selectIsAuthenticated
} from '../../../core/core.module';

import { State } from '../examples.state';

@Component({
  selector: 'jot-examples',
  templateUrl: './examples.component.html',
  styleUrls: ['./examples.component.scss'],
  animations: [routeAnimations],
  changeDetection: ChangeDetectionStrategy.OnPush
})
export class ExamplesComponent implements OnInit {
  isAuthenticated$: Observable<boolean>;

  examples = [
    { link: 'todos', label: 'jot.examples.menu.todos' },
    { link: 'stock-market', label: 'jot.examples.menu.stocks' },
    { link: 'theming', label: 'jot.examples.menu.theming' },
    { link: 'crud', label: 'jot.examples.menu.crud' },
    {
      link: 'simple-state-management',
      label: 'jot.examples.menu.simple-state-management'
    },
    { link: 'form', label: 'jot.examples.menu.form' },
    { link: 'notifications', label: 'jot.examples.menu.notifications' },
    { link: 'elements', label: 'jot.examples.menu.elements' },
    { link: 'authenticated', label: 'jot.examples.menu.auth', auth: true }
  ];

  constructor(private store: Store<State>) {}

  ngOnInit(): void {
    this.isAuthenticated$ = this.store.pipe(select(selectIsAuthenticated));
  }
}

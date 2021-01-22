import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AuthComponent } from './auth/auth.component';
import { AuthenticationGuard } from './core/authentication/authentication.guard';
import { IndexComponent } from './index/index.component';

const routes: Routes = [
  { path: '', component: AuthComponent },

  {
    path: 'index',
    canActivate: [AuthenticationGuard],
    children: [
      { path: '', component: IndexComponent },
      { path: '**', redirectTo: '', pathMatch: 'full' }
    ]
  },

  { path: '**', redirectTo: '', pathMatch: 'full' }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

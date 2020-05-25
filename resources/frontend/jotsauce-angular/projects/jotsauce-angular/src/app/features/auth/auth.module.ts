import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { SharedModule } from '../../shared/shared.module';
import { AuthRoutingModule } from './auth-routing.module';
import { AuthComponent } from './auth.component';
import { RegisterComponent } from './register/register.component';


@NgModule({
  declarations: [AuthComponent, RegisterComponent],
  imports: [CommonModule, SharedModule, AuthRoutingModule]
})
export class AuthModule { }

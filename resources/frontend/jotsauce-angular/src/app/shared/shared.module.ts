import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';



@NgModule({
  declarations: [
    // custom components
  ],
  imports: [
    CommonModule
    // 3rd party modules
  ],
  exports: [
    CommonModule
    // 3rd party modules
    // custom components
  ]
})
export class SharedModule { }

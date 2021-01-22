import { NgModule, Optional, SkipSelf } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ToastrModule } from 'ngx-toastr';
import { FormsModule } from '@angular/forms';



@NgModule({
  declarations: [],
  imports: [
    CommonModule,
    FormsModule,
    ToastrModule.forRoot({
      closeButton: true,
      timeOut: 6000,
      extendedTimeOut: 3000,
      progressBar: true,
      progressAnimation: 'decreasing'
    })
  ],
  exports: [
    FormsModule,
    ToastrModule
  ]
})
export class CoreModule {
  constructor(
    @Optional()
    @SkipSelf()
    parentModule: CoreModule
  ) {
    if (parentModule) {
      throw new Error('CoreModule is already loaded. Import only in AppModule');
    }
  }
}

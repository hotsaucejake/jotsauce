import { Component, OnInit } from '@angular/core';
import { BreakpointObserver } from '@angular/cdk/layout';

@Component({
  selector: 'app-index-compendium',
  templateUrl: './compendium.component.html',
  styleUrls: ['./compendium.component.scss']
})
export class CompendiumComponent implements OnInit {

  constructor(private breakpointObserver: BreakpointObserver) {}

  ngOnInit(): void {
  }

}

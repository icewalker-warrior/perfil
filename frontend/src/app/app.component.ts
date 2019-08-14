import { Component, OnInit } from '@angular/core';
import { ApiService } from './api.service';
import { Observable } from 'rxjs';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})

export class AppComponent {
  profiles$: Object;
  teste = "miguel";
  constructor(private apiService: ApiService) {}

  ngOnInit() {
    this.apiService.getProfile().subscribe(data => this.profiles$ = data[0]);
  }
}

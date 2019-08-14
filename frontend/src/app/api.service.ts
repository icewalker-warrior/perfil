import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ApiService {
  apiURL: string = '';
  constructor(private httpClient: HttpClient) {}

  getProfile(){
      return this.httpClient.get('http://localhost:3000/');
  }
}

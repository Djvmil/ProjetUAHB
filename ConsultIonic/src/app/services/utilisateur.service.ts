import { Injectable } from '@angular/core';

import { Observable } from 'rxjs';
//import { map } from 'rxjs/operators';
 import 'rxjs/add/operator/map';
import { Http,Headers,RequestOptions } from '@angular/http';
import { HttpClient } from '@angular/common/http';

import { Events } from '@ionic/angular';
import { DataSource } from './datasource';


@Injectable({
  providedIn: 'root'
})
export class UtilisateurService {

  constructor(
		public events: Events,
		private http: Http,
		public authHttp: HttpClient,
    public datasource: DataSource) { }

    getData(){
      return this.http.get('http://localhost:8000/api/data')
      .map(res => res);
    }


}

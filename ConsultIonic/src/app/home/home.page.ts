import { Component } from '@angular/core';

import { UtilisateurService } from '../services/utilisateur.service'; // service for crud with server side
import { DataSource } from '../services/datasource'; // to store data for view
import {AlertController, LoadingController, Events, NavController, NavParams } from '@ionic/angular';
@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {

    constructor(
      public navCtrl: NavController,
      public db: UtilisateurService,
      public datasource: DataSource) {
       }
}

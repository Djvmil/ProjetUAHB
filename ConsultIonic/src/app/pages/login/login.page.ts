import { Component, OnInit } from '@angular/core';
import { NgForm } from '@angular/forms';
import { AlertController, LoadingController, Events, NavController, NavParams } from '@ionic/angular';

@Component({
  selector: 'app-login',
  templateUrl: './login.page.html',
  styleUrls: ['./login.page.scss'],
})
export class LoginPage implements OnInit {

  constructor(
    public navCtrl: NavController,
    public events: Events,
    public navParams: NavParams,
    private alertCtrl: AlertController,
    private loadingCtrl: LoadingController
  ) { }



  ngOnInit() {
  }



}

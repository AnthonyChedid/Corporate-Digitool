import axios from 'axios';
import authHeader from './auth-header';
import * as XLSX from 'xlsx/xlsx.mjs';
import * as Lodash from 'lodash';

import { _ } from 'core-js';
const API_URL = 'http://localhost:8000/api/';
class UserService {
  async getNewChallenges(id) {
    // let user = JSON.parse(localStorage.getItem('user'));
    // let token=localStorage.getItem('token').substring(1,localStorage.getItem('token').length-1)
    const config = {
      'Content-Type': 'multipart/form-data',
      responseType: 'json',
      headers: authHeader(),
    };
    const res =  await axios.get(API_URL + 'getnewchallenges/'+id,config);
    return res.data
  }
  async getPreviousChallenges(id) {
    // let user = JSON.parse(localStorage.getItem('user'));
    // let token=localStorage.getItem('token').substring(1,localStorage.getItem('token').length-1)
    const config = {
      "Content-type": "application/json",
      responseType: 'json',
      headers: authHeader(),
    };
    const res =  await axios.get(API_URL + 'getpreviouschallenges/'+id,config);
    return res.data
  }

  async getTasks(id) {
    // let user = JSON.parse(localStorage.getItem('user'));
    // let token=localStorage.getItem('token').substring(1,localStorage.getItem('token').length-1)
    const config = {
      "Content-type": "application/json",
      responseType: 'json',
      headers: authHeader(),
    };
    const res =  await axios.get(API_URL + 'gettasks/'+id,config);
    return res.data
  }

  async answerTask(body){
    const config = {
      "Content-type": "application/json",
      responseType: 'json',
      headers: authHeader(),
    };
    await axios.patch(API_URL + 'task',body,config);
  }

  async finishChallenge(id){
    const config = {
      "Content-type": "application/json",
      responseType: 'json',
      headers: authHeader(),
    };
    await axios.patch(API_URL +'challengefinished/'+id,{},config);
  }

  async getResultTasks(id){
    const config = {
      "Content-type": "application/json",
      responseType: 'json',
      headers: authHeader(),
    };

    const res = await axios.get(API_URL +'getresulttasks/'+id,config);
    return res.data
  }

  async asnwerExcelCreationTask(body){
    const config = {
      "Content-type": "application/json",
      responseType: 'json',
      headers: authHeader(),
    };
    let newBody = JSON.parse(JSON.stringify(body));
    body.file[0].arrayBuffer().then((res)=>{ 
      var wb = XLSX.read(res);
      var excel = wb.Sheets
      if(
        Lodash.isEqual(excel.Sheet1.A1,{t: 's', v: 'id', r: '<t>id</t>', h: 'id', w: 'id'}) &&
        Lodash.isEqual(excel.Sheet1.A2,{t: 'n', v: 1, w: '1'})&&
        Lodash.isEqual(excel.Sheet1.A3,{t: 'n', v: 2, w: '2'})&&
        Lodash.isEqual(excel.Sheet1.A4,{t: 'n', v: 3, w: '3'})&&
        Lodash.isEqual(excel.Sheet1.A5,{t: 'n', v: 4, w: '4'})&&
        Lodash.isEqual(excel.Sheet1.A6,{t: 'n', v: 5, w: '5'})&&
        Lodash.isEqual(excel.Sheet1.A7,{t: 'n', v: 6, w: '6'})&&
        Lodash.isEqual(excel.Sheet1.A8,{t: 'n', v: 7, w: '7'})&&
        Lodash.isEqual(excel.Sheet1.B1,{t: 's', v: 'first name', r: '<t>first name</t>', h: 'first name', w: 'first name'})&&
        Lodash.isEqual(excel.Sheet1.B2,{t: 's', v: 'Jhon', r: '<t>Jhon</t>', h: 'Jhon', w: 'Jhon'})&&
        Lodash.isEqual(excel.Sheet1.B3,{t: 's', v: 'Mike', r: '<t>Mike</t>', h: 'Mike', w: 'Mike'})&&
        Lodash.isEqual(excel.Sheet1.B4,{t: 's', v: 'Selena', r: '<t>Selena</t>', h: 'Selena', w: 'Selena'})&&
        Lodash.isEqual(excel.Sheet1.B5,{t: 's', v: 'Maria', r: '<t>Maria</t>', h: 'Maria', w: 'Maria'})&&
        Lodash.isEqual(excel.Sheet1.B6,{t: 's', v: 'Klopas', r: '<t>Klopas</t>', h: 'Klopas', w: 'Klopas'})&&
        Lodash.isEqual(excel.Sheet1.B7,{t: 's', v: 'Hammond', r: '<t>Hammond</t>', h: 'Hammond', w: 'Hammond'})&&
        Lodash.isEqual(excel.Sheet1.B8,{t: 's', v: 'Malena', r: '<t>Malena</t>', h: 'Malena', w: 'Malena'})&&
        Lodash.isEqual(excel.Sheet1.C1,{t: 's', v: 'last name', r: '<t>last name</t>', h: 'last name', w: 'last name'})&&
        Lodash.isEqual(excel.Sheet1.C2,{t: 's', v: 'Doe', r: '<t>Doe</t>', h: 'Doe', w: 'Doe'})&&
        Lodash.isEqual(excel.Sheet1.C3,{t: 's', v: 'Zawar', r: '<t>Zawar</t>', h: 'Zawar', w: 'Zawar'})&&
        Lodash.isEqual(excel.Sheet1.C4,{t: 's', v: 'Lorraine', r: '<t>Lorraine</t>', h: 'Lorraine', w: 'Lorraine'})&&
        Lodash.isEqual(excel.Sheet1.C5,{t: 's', v: 'Angelina', r: '<t>Angelina</t>', h: 'Angelina', w: 'Angelina'})&&
        Lodash.isEqual(excel.Sheet1.C6,{t: 's', v: 'Lubomir', r: '<t>Lubomir</t>', h: 'Lubomir', w: 'Lubomir'})&&
        Lodash.isEqual(excel.Sheet1.C7,{t: 's', v: 'Nausikaa', r: '<t>Nausikaa</t>', h: 'Nausikaa', w: 'Nausikaa'})&&
        Lodash.isEqual(excel.Sheet1.C8,{t: 's', v: 'Lesia', r: '<t>Lesia</t>', h: 'Lesia', w: 'Lesia'})
        ){
          newBody.score=1
          axios.patch(API_URL + 'task',newBody,config);
        }
        else{
          newBody.score=0
          axios.patch(API_URL + 'task',newBody,config);
        }


    });

  }
  
}
export default new UserService();
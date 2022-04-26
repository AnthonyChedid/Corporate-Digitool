import axios from 'axios';
import authHeader from './auth-header';
const API_URL = 'http://localhost:8000/api/';
class UserService {
  async getNewChallenges(id) {
    // let user = JSON.parse(localStorage.getItem('user'));
    // let token=localStorage.getItem('token').substring(1,localStorage.getItem('token').length-1)
    const config = {
      "Content-type": "application/json",
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
  
}
export default new UserService();
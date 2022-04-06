import axios from 'axios';
import authHeader from './auth-header'
const API_URL = 'http://localhost:8000/api/';

class AuthService {
  login(user) {
    return axios
      .post(API_URL + 'login', {
        email: user.email,
        password: user.password
      })
      .then(response => {
        if (response.data.token) {
          localStorage.setItem('user', JSON.stringify(response.data.user));
          localStorage.setItem('token', JSON.stringify(response.data.token));
        }
        return response.data;
      });
  }
  logout() {
    let token=localStorage.getItem('token').substring(1,localStorage.getItem('token').length-1)
    console.log("logout token : "+token);
    const config = {
      "Content-type": "application/json",
      headers: { "Authorization": `Bearer ${token}` }
    };
  
    axios.post( 
      API_URL+'logout',null,config
    ).then(console.log).catch(console.log);
    localStorage.removeItem('token')
    localStorage.removeItem('user')

  }
  register(user) {
    return axios.post(API_URL + 'register', {
      name: user.name,
      email: user.email,
      password: user.password,
      password_confirmation: user.password_confirmation
    }).then(response => {
      if (response.data.token) {
        localStorage.setItem('user', JSON.stringify(response.data.user));
        localStorage.setItem('token', JSON.stringify(response.data.token));
      }
      return response.data;
    });
  }
}
export default new AuthService();
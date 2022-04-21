export default function authHeader() {
    let token=localStorage.getItem('token').substring(1,localStorage.getItem('token').length-1)
    let user = JSON.parse(localStorage.getItem('user'));
    if (user && token) {
      return { Authorization: 'Bearer ' + token };
    } else {
      return {};
    }
  }
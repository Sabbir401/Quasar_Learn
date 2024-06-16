// Set config defaults when creating the instance
const api = axios.create({
    baseURL: '/api/'
  });
  

  if(localStorage.getItem('token')){
    // Alter defaults after instance has been created
    api.defaults.headers.common['Authorization'] = "Bearer "+localStorage.getItem('token');
  }
import axios from 'axios'

const apiClient = axios.create({
    baseURL:  'http://127.0.0.1:8000',
    withCredentials: false,
    headers: {
        Accept: 'application/json',
        'Content-Type': 'application/json'
    }
})

export default {
    getLogin(formdata){
        return apiClient.post('/api/login', formdata)
    },
    getRegister(formdata){
        return apiClient.post('/api/register', formdata)
    },
    createRole(formdata){
        return apiClient.post('/api/role', formdata)
    },
    deleteRole(formdata){
        return apiClient.post('/api/remove/assigned/role', formdata)
    },
    assignRole(formdata){
        return apiClient.post('/api/assign/role', formdata)
    },
    getUserList(){
        return apiClient.get('/api/user/list')
    },
    logout(formdata){
        return apiClient.post('/logout', formdata)
    },
    getUserProfile(formdata){
        return apiClient.get('/api/user/profile/', formdata)
    }
    
}
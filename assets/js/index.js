import { getMethod } from './api_methods/get.js';
import { helpers } from './helpers/helpers.js';



  if (page === 'dashboard') {
    getMethod.url('getEmployees', 'employeeList', page)
      .then(data => {
        $('#main-wrapper').jsGrid(helpers.grid(data));
        $('.input_avatar').last().prop('checked',true);
      });
  } else {
    getMethod.url('getUsers', 'userList', page)
    .then(data => {
      console.log(data);
      $('#main-wrapper').jsGrid(helpers.userGrid(data));
      $('.input_avatar').last().prop('checked', true);
    });
  }
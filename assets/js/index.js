console.log('hola');
import { getMethod } from './api_methods/get.js';
import { helpers } from './helpers/helpers.js';
import {URL} from './config/config.js';

getMethod
  .url(`${URL}dashboard`, 'employeesList')
  .then(data => {
    console.log(data);
    $('#main-wrapper').jsGrid(helpers.grid(data));
    $('.input_avatar').last().prop('checked',true);

  });

import { deleteMethod } from '../api_methods/delete.js';
import { postMethod } from '../api_methods/post.js';
import { putMethod } from '../api_methods/put.js';

export const helpers = {
  grid: function (employeesList) {
    return {
      width: '100%',
      height: 'auto',
      inserting: true,
      editing: true,
      sorting: true,
      paging: true,
      datatype: 'json',
      deleteConfirm: 'Do you really want to delete the client?',
      data: employeesList,

      onItemDeleting: function (args) {
        deleteMethod
        .url('deleteEmployee', args.item.id)
        .done(() => {
          $('.toast-msg').html(`
              <div class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
                <div class='toast-body'>
                  Employee deleted correctly
                </div>
              </div>
              
              <script>
                $(".toast").toast({
                delay: 3000
                });
                $(".toast").toast('show');
              </script>`);
        });
      },
      onItemInserting: function (args) {
        postMethod
          .url('createEmployee', args.item)
          .done(() => {
                $('.toast-msg').html(`
                <div class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
                  <div class='toast-body'>
                    Employee created correctly
                  </div>
                </div>
                
                <script>
                  $(".toast").toast({
                  delay: 3000
                  });
                  $(".toast").toast('show');
                </script>`);
          });
      },
      onItemUpdating: function (args) {
        putMethod
          .url('updateEmployee', args.item)
          .done((message) => {
            $('.toast-msg').html(`
                <div class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
                  <div class='toast-body'>
                    ${message}
                  </div>
                </div>
                
                <script>
                  $(".toast").toast({
                  delay: 3000
                  });
                  $(".toast").toast('show');
                </script>`);
          });
      },
      rowClick: function (args) {
        window.location.href = `${URL}dashboard/employee/${args.item.id}`;
      },

      fields: [
        {
          name: 'name',
          title: 'Name',
          type: 'text',
          width: 150,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'email',
          title: 'Email',
          type: 'text',
          width: 200,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'age',
          title: 'Age',
          type: 'number',
          width: 50,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'streetAddress',
          title: 'Adress',
          type: 'text',
          width: 200,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'city',
          title: 'City',
          type: 'text',
          width: 200,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'state',
          title: 'State',
          type: 'text',
          width: 50,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'postalCode',
          title: 'PC',
          type: 'number',
          width: 70,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'phoneNumber',
          title: 'Telephone',
          type: 'number',
          width: 100,
          validate: 'required',
          align: 'center',
        },
        { type: 'control' },
      ],
    };
  },
  userGrid: function (userList) {
    return {
      width: '100%',
      height: 'auto',
      inserting: false,
      editing: false,
      sorting: true,
      paging: false,
      datatype: 'json',
      deleteConfirm: 'Do you really want to delete the client?',
      data: userList,
      editRowRenderer: null,

      onItemDeleting: function (args) {
        deleteMethod
        .url('deleteUser', args.item.id, page)
        .done(() => {
          $('.toast-msg').html(`
              <div class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
                <div class='toast-body'>
                  User deleted correctly
                </div>
              </div>
              
              <script>
                $(".toast").toast({
                delay: 3000
                });
                $(".toast").toast('show');
              </script>`);
        });
      },
      fields: [
        {
          name: 'name',
          title: 'Name',
          type: 'text',
          width: 150,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'email',
          title: 'Email',
          type: 'text',
          width: 200,
          validate: 'required',
          align: 'center',
        },
        { type: 'control', },
      ],
    };
  },
};

export const getMethod = {
  url: function (pathToSend, data) {
    const request = {
      url: pathToSend,
      data: data,
      type: 'GET',
    };
    console.log(request);
    return $.ajax(request);
  },
};

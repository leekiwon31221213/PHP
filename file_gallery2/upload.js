const btn = document.querySelector('.upload_btn');
btn.addEventListener('click', (e) => {
  e.preventDefault();

  //document.upload_form   document.폼의 네임이 올 수 있음
  const form = document.upload_form;
  if (form.photo.value == '') {
    alert('파일을 첨부해 주세요');
    return false; //더 이상 실행되면 안되기 때문에 return을 사용해 빠져나옴
  }
  form.submit();
});

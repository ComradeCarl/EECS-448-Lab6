function output_message(username, password)  
{
  var text1 = '';

  let x = document.getElementById('changes');
  if(username_check(username) == true && password.length != 0)
  {
    x.style.backgroundColor = 'green';
    text1 = 'Valid credentials';
  }
  else if(username_check(username) == true && password.length == 0)
  {
    text1 = 'Password must not be left blank';
    x.style.backgroundColor = 'red';
  }
  else if(username_check(username) == false && password.length == 0)
  {
    text1 = 'Username and password is invalid';
    x.style.backgroundColor = 'red';
  }
  else
  {
    text1 = 'Username is invalid';
    x.style.backgroundColor = 'red';
  }

  return text1;
}

function username_check(username)
{
  var bool = false;
  var domain = ['gmail.com','hotmail.com','outlook.com','yahoo.com']; 
  var inputted_domain = (username.split('@'))[1];
  
  for(let i = 0; i < domain.length; i++)
  {
    if(inputted_domain == domain[i])
    {
      bool = true;
      break;
    }
  }

  return bool;
}

function active_key()
{
  var password = document.getElementById('password').value;
  var username = document.getElementById('username').value;
  
  text = document.getElementById('changes');
  text.textContent = output_message(username, password);

  let x = document.getElementById('submit');
  if((username_check(username) && password != 0) == true)
  {
    x.style.display = 'inline';
  }
  else
  {
    x.style.display = 'none';
  }
}

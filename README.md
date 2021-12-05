<div id="top"></div>

<!-- PROJECT LOGO -->
<br />
<div align="center">

  <h2 align="center">Pay to Pay</h2>

  <p align="center">
    An awesome project that allows transfer between different users
    <br />
    <br />
    <a href="https://github.com/lucasoliveira08/paytopay/issues">Report Bug</a>
    ·
    <a href="https://github.com/lucasoliveira08/paytopay/issues">Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

This project was created with the aim of learning and putting into practice the knowledge:

* DDD;
* SOLID;
* Clean Architecture.

It is an attempt to create a hybrid version between Clean and DDD, but **not all concepts were followed to the letter**. The idea is to comply with the [SOLID principles](https://scotch.io/bar-talk/s-o-l-i-d-the-first-five-principles-of-object-oriented-design) as much as possible, with a few exceptions to simplify the code.


<p align="right">(<a href="#top">back to top</a>)</p>

<!-- GETTING STARTED -->
## Getting Started


### Prerequisites
* npm
  ```sh
  npm install npm@latest -g
  ```
* composer (<a href="https://getcomposer.org/download/">here</a>)

* php 7.4+ (<a href="https://www.php.net/downloads">here</a>)



### Installation


1. Clone the repo
   ```sh
   git clone https://github.com/lucasoliveira08/paytopay
   ```
2. Install packages
   ```bash
   $ composer install
   ```
3. Rename the file  `.env.example` to `.env` and change these informations according to your SGBD 
   ```md
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
   ```
4. Create an account into <a href="https://mailtrap.io/">mailtrap.io</a> and change these informations inside the `.env` file
    ```md
    MAIL_MAILER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=your_mailtrap_username
    MAIL_PASSWORD=your_mailtrap_password
    MAIL_ENCRYPTION=tls
   ```
5. Execute the commands bellow 
   ```bash
   $ php artisan key:generate
   ```
   ```bash
   $ php artisan jwt:secret
   ```
   ```bash
   $ php artisan migrate:refresh --seed
   ```
6. Start the API server
   ```bash
   $ php artisan serve
   ```

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- USAGE EXAMPLES -->
## Usage

You can use the **postman** to test these features

### Register

#### Request

`POST /api/auth/register`

```json
{
    "name": "John Doe",
    "cpf_cnpj": "46180395667",
    "email": "john@doe.com",
    "password": "123456789",
    "role": 1
}
```

`Role 1 => lojista
 Role 2 => Consumidor`

#### Response
`HTTP/1.1 201 Created`
```json
{
    "mensagem": "Usuário criado com sucesso!"
}
```

### Login

#### Request

`POST /api/auth/login`

```json
{
    "email": "exemplo@exemplo.com",
    "password": "123456789"
}
```

#### Response
`HTTP/1.1 200 Success`
```json
{
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9hdXRoXC9sb2dpbiIsImlhdCI6MTYzODczNTI3MiwiZXhwIjoxNjM4NzM4ODcyLCJuYmYiOjE2Mzg3MzUyNzIsImp0aSI6IkRhQUhMSFZqZnh3WWVscFQiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.CWx5IUn-l8OjyfE5QRATIG1KolfeieSGNFo-jODcIgM",
    "token_type": "bearer",
    "expires_in": 3600
}
```

### Logout

#### Request

`POST /api/auth/logout`

#### Response
`HTTP/1.1 200 Success`
```json
{
    "mensagem": "Logout realizado com sucesso!"
}
```

### Get balance

#### Request

`POST /api/auth/balance`

#### Response
`HTTP/1.1 200 Success`
```json
{
    "value": "R$50,80"
}
```

### Make a deposit

#### Request

`POST /api/auth/deposit`

```json
{
    "value": "500.80"
}
```

#### Response
`HTTP/1.1 201 Created`

```json
{
    "mensagem": "Depósito realizado com sucesso!"
}
```


### Make a transfer to another user

#### Request

`POST /api/auth/transfer`

```json
{
    "value": "500.80"
}
```

#### Response
`HTTP/1.1 201 Created`

```json
{
    "mensagem": "Transferência realizada com sucesso!"
}
```


<p align="right">(<a href="#top">back to top</a>)</p>



<!-- ROADMAP -->
## Roadmap

- [ ] Deploy in a real server;
- [ ] Create automated tests.

See the [open issues](https://github.com/lucasoliveira08/paytopay/issues) for a full list of proposed features (and known issues).

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p>

<!-- CONTACT -->
## Contact

For any question or feedback feel free to contact me:

E-mail: <a href="mailto:olucas16gmail.com">olucas16@gmail.com</a><br>
Linkedin: <a href="https://www.linkedin.com/in/lucasgoliveira/">Lucas Oliveira</a> <br>
Portfolio: <a href="https://lucas-oliveira.com">https://lucas-oliveira.com
<p align="right">(<a href="#top">back to top</a>)</p>


<!-- MARKDOWN LINKS & IMAGES -->
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://www.linkedin.com/in/lucasgoliveira/

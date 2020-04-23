<style lang="scss" src="./login.scss" scoped></style>

<template>
    <div class="landing">
    <div class="landing-decoration"></div>

    <div class="landing-info">
      <div class="logo">
        <svg class="icon-logo-vikinger">
          <use href="#svg-logo-vikinger">
            <symbol id="svg-logo-vikinger" viewBox="0 0 28 40" preserveAspectRatio="xMinYMin meet">
              <path d="M27.18,24.038c-0.141-0.095-0.244-0.146-0.244-0.146l-0.005-0.049C25.489,22.783,23.103,22,23.103,22c1.542,0,2.582-0.563,3.501-1.334c-0.049-0.055,0.7-0.666,0.7-0.666c0.146-8.251-4.477-12.745-7.001-14.667C18.15,9.564,16.802,14,16.802,14c-0.219-4.426,0.243-8.072,0.7-10.667c-0.85-0.452-1.956-0.698-2.296-1.537C14.865,0.957,14.015,0,14.015,0L14,0.014L13.985,0c0,0-0.85,0.957-1.19,1.796c-0.34,0.839-1.445,1.085-2.295,1.537C10.957,5.928,11.418,9.574,11.2,14c0,0-1.349-4.436-3.501-8.667C5.174,7.255,0.551,11.749,0.697,20c0,0,0.75,0.611,0.701,0.666C2.316,21.437,3.357,22,4.898,22c0,0-2.387,0.783-3.829,1.844l-0.005,0.049c0,0-0.104,0.051-0.244,0.146c-0.48,0.397-0.806,0.828-0.819,1.269c-0.023,0.521,0.263,1.181,1.233,1.973c0,0,0.136,9.259,9.69,11.29c0,0,0.212,0.815,0.975,1.431L14,38l2.102,2c0.763-0.615,0.975-1.431,0.975-1.431c9.555-2.031,9.689-11.29,9.689-11.29
              c0.971-0.792,1.256-1.451,1.233-1.973C27.986,24.866,27.659,24.436,27.18,24.038z M4.198,26c2.362,0.121,3.517,1.473,5.602,4c0.799,0.969,2.059,0.83,2.059,0.83L11.899,34C5.249,34,4.198,26,4.198,26z M14,28.162l-2.97-2.828l2.101-2.001l-2.101-2l2.101-2l-2.101-2L14,14.505l2.972,2.828l-2.102,2l2.102,2l-2.102,2l2.102,2.001L14,28.162z M16.102,34l0.041-3.17
              c0,0,1.26,0.139,2.059-0.83c2.085-2.527,3.239-3.879,5.602-4C23.803,26,22.752,34,16.102,34z M13.3,26h1.4v-1.333h-1.4V26z M13.3,22h1.4v-1.334h-1.4V22z M13.3,18h1.4v-1.333h-1.4V18z"/>
            </symbol>
          </use>
        </svg>
      </div>

      <h2 class="landing-info-pretitle">Welcome to</h2>

      <h1 class="landing-info-title">Jot Sauce</h1>

      <p class="landing-info-text">Rapid Logging for Productivity and Journaling</p>

      <div class="tab-switch">
        <p class="tab-switch-button login-register-form-trigger" :class="{ active: login }" @click="changeForm(true)">Login</p>
        <p class="tab-switch-button login-register-form-trigger" :class="{ active: !login }" @click="changeForm(false)">Register</p>
      </div>
    </div>

    <div class="landing-form">

      <transition name="fade">
      <div class="form-box login-register-form-element" v-if="login">
        <img class="form-box-decoration overflowing" src="../../assets/img/landing/rocket.png" alt="rocket">

        <h2 class="form-box-title">Account Login</h2>
    
        <form class="form" @submit.prevent="submit">
          <div class="form-row">
            <div class="form-item">
              <div class="form-input">
                <label for="login-email">Email</label>
                <input type="text" id="login-email" name="email" v-model="email">
              </div>
            </div>
          </div>
    
          <div class="form-row">
            <div class="form-item">
              <div class="form-input">
                <label for="login-password">Password</label>
                <input type="password" id="login-password" name="password" v-model="password">
              </div>
            </div>
          </div>
    
          <div class="form-row space-between">
            <div class="form-item">
              <div class="checkbox-wrap">
                <input type="checkbox" id="login-rememberMe" name="rememberMe" v-model="rememberMe">
                <div class="checkbox-box">
                  <svg class="icon-cross">
                    <use xlink:href="#svg-cross">
                      <symbol id="svg-cross" viewBox="0 0 12 12" preserveAspectRatio="xMinYMin meet">
                        <path d="M12,9.6L9.6,12L6,8.399L2.4,12L0,9.6L3.6,6L0,2.4L2.4,0L6,3.6L9.6,0L12,2.4L8.399,6L12,9.6z"/>
                      </symbol>
                    </use>
                  </svg>
                </div>
                <label for="login-remember">Remember Me</label>
              </div>
            </div>
    
            <div class="form-item">
              <a class="form-link" href="#">Forgot Password?</a>
            </div>
          </div>
    
          <div class="form-row">
            <div class="form-item">
              <button class="button medium secondary">Login to your Account!</button>
            </div>
          </div>
        </form>
    
        <p class="lined-text">Login with your Social Account</p>
    
        <div class="social-links">
          <a class="social-link facebook" href="#">
            <svg class="icon-facebook">
              <use xlink:href="#svg-facebook">
                <symbol id="svg-facebook" viewBox="0 0 18 18" preserveAspectRatio="xMinYMin meet">
                  <path d="M16.313,18h-4.504v-6.192h3.087V8.671h-3.087V7.135V6.831V6.814l0,0c0.01-0.328,0.277-0.591,0.607-0.591h0.067h1.113h1.62V3.086h-2.733l0,0l-0.009,0.018h-0.092c-2.051,0-3.712,1.661-3.712,3.711v0.911v0.945H6.191v3.137h2.479V18H1.687C0.755,18,0,17.242,0,16.313V1.686C0,0.754,0.755,0,1.687,0h14.626C17.244,0,18,0.754,18,1.686v14.627C18,17.242,17.244,18,16.313,18z"/>
                </symbol>
              </use>
            </svg>
          </a>
    
          <a class="social-link twitter" href="#">
            <svg class="icon-twitter">
              <use xlink:href="#svg-twitter">
                <symbol id="svg-twitter" viewBox="0 0 18 18" preserveAspectRatio="xMinYMin meet">
                  <path d="M18,3.617c-0.675,0.322-1.351,0.43-2.139,0.537c0.788-0.43,1.351-1.076,1.576-1.937c-0.675,0.43-1.463,0.646-2.362,0.861C14.399,2.431,13.388,2,12.375,2c-1.912,0-3.601,1.617-3.601,3.554c0,0.323,0,0.538,0.113,0.754C5.851,6.2,3.038,4.8,1.238,2.646C0.9,3.185,0.788,3.724,0.788,4.478c0,1.184,0.675,2.261,1.688,2.907c-0.563,0-1.125-0.216-1.688-0.431l0,0c0,1.723,1.237,3.122,2.925,3.446c-0.338,0.107-0.675,0.107-1.013,0.107c-0.225,0-0.45,0-0.675-0.107c0.45,1.399,1.8,2.476,3.487,2.476C4.274,13.846,2.7,14.384,0.9,14.384c-0.338,0-0.563,0-0.9,0C1.688,15.354,3.601,16,5.625,16c6.75,0,10.462-5.385,10.462-10.015c0-0.108,0-0.323,0-0.431C16.875,5.016,17.549,4.371,18,3.617z"/>
                </symbol>
              </use>
            </svg>
          </a>
    
          <a class="social-link twitch" href="#">
            <svg class="icon-twitch">
              <use xlink:href="#svg-twitch">
                <symbol id="svg-twitch" viewBox="0 0 100 100" preserveAspectRatio="xMinYMin meet">
                  <path d="M6.179,0L0,17.964V87.81h24.714V100h15.789L52.86,87.81h18.993L100,60.527V0H6.179z M90.39,57.645L74.828,72.504H49.885L37.299,84.703V72.504H15.561V9.094H90.39V57.645z M49.885,27.051h-9.382v27.27h9.382V27.051z M74.828,27.051h-9.382v27.27h9.382V27.051z"/>
                </symbol>
              </use>
            </svg>
          </a>
    
          <a class="social-link youtube" href="#">
            <svg class="icon-youtube">
              <use xlink:href="#svg-youtube">
                  <symbol id="svg-youtube" viewBox="0 0 100 100" preserveAspectRatio="xMinYMin meet">
                    <path d="M97.911,24.557c-1.149-4.549-4.538-8.13-8.842-9.347C81.271,13,49.999,13,49.999,13s-31.271,0-39.07,2.21c-4.302,1.216-7.69,4.798-8.84,9.347C0,32.8,0,50.001,0,50.001s0,17.2,2.089,25.443c1.15,4.549,4.538,8.132,8.84,9.348C18.729,87,49.999,87,49.999,87s31.271,0,39.07-2.208c4.304-1.216,7.692-4.799,8.842-9.348C100,67.201,100,50.001,100,50.001S100,32.8,97.911,24.557z M39.999,65.858V34.144L65.98,50.001L39.999,65.858z"/>
                  </symbol>
              </use>
            </svg>
          </a>
        </div>
      </div>
      </transition>


      <transition name="bounce">
      <div class="form-box login-register-form-element" v-if="!login">
        <img class="form-box-decoration" src="../../assets/img/landing/rocket.png" alt="rocket">

        <h2 class="form-box-title">Create your Account!</h2>
    
        <form class="form">
          <div class="form-row">
            <div class="form-item">
              <div class="form-input">
                <label for="register-email">Your Email</label>
                <input type="text" id="register-email" name="register_email">
              </div>
            </div>
          </div>
    
          <div class="form-row">
            <div class="form-item">
              <div class="form-input">
                <label for="register-username">Username</label>
                <input type="text" id="register-username" name="register_username">
              </div>
            </div>
          </div>
    
          <div class="form-row">
            <div class="form-item">
              <div class="form-input">
                <label for="register-password">Password</label>
                <input type="password" id="register-password" name="register_password">
              </div>
            </div>
          </div>
    
          <div class="form-row">
            <div class="form-item">
              <div class="form-input">
                <label for="register-password-repeat">Repeat Password</label>
                <input type="password" id="register-password-repeat" name="register_password_repeat">
              </div>
            </div>
          </div>
    
          <div class="form-row">
            <div class="form-item">
              <button class="button medium primary">Register Now!</button>
            </div>
          </div>
        </form>
    
        <p class="form-text">You'll receive a confirmation email in your inbox with a link to activate your account. If you have any problems, <a href="#">contact us</a>!</p>
      </div>
      </transition>
    </div>
  </div>
    
</template>

<script lang="ts" src="./login.ts"></script>

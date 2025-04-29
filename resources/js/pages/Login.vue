<template>
  <div class="user-form-section">
    <div class="container _1200px">
      <div class="w-users-userloginformwrapper user-form">
        <form
          data-wf-user-form-type="login"
          data-wf-user-form-redirect="/"
          method="post"
        >
          <div class="w-users-userformheader">
            <img
              src="https://cdn.prod.website-files.com/6645e067437815581429586a/6694af590da8c0b422daad9d_logo.png"
              loading="lazy"
              alt=""
              class="user-logo"
            />
            <div class="margin-bottom-48px">
              <p class="_20px-500">
                Sign In to Access Your Account and Explore Exciting Career
                Possibilities Today
              </p>
            </div>
          </div>
          <input
            maxlength="256"
            placeholder=""
            name="Email"
            id="wf-log-in-email"
            class="user-input email w-input"
            type="email"
            autocomplete="username"
            required
            data-wf-user-form-input-type="email"
          /><input
            maxlength="256"
            placeholder=""
            name="Password"
            id="wf-log-in-password"
            class="user-input password w-input"
            type="password"
            required
            data-wf-user-form-input-type="password"
          />
          <div class="w-users-userformfooter form-footer">
            <a href="/reset-password" class="tertiary-link">Forgot Password?</a>
          </div>
          <input
            type="submit"
            data-wait="Please wait..."
            class="w-users-userformbutton user-button w-button"
            value="Log In"
          /><a href="#" class="google-button w-inline-block"
            ><img
              src="https://cdn.prod.website-files.com/6645e067437815581429586a/669612965b69821a8e9a5056_google%201.png"
              loading="lazy"
              alt=""
              class="image-24px"
            />
            <div>Login with google</div></a
          >
        </form>
        <div
          style="display: none"
          data-wf-user-form-error="true"
          class="w-users-userformerrorstate w-form-fail"
        >
          <div
            class="user-form-error-msg"
            wf-login-form-general-error-error="We're having trouble logging you in. Please try again, or contact us if you continue to have problems."
            wf-login-form-invalid-email_or_password-error="Invalid email or password. Please try again."
          >
            We're having trouble logging you in. Please try again, or contact us
            if you continue to have problems.
          </div>
        </div>
      </div>
    </div>
  </div>
  <img
    src="https://cdn.prod.website-files.com/6645e067437815581429586a/669505f4757338eefb6b3aa7_Mask%20group.png"
    loading="lazy"
    sizes="(max-width: 767px) 100vw, 40vw"
    srcset="
      https://cdn.prod.website-files.com/6645e067437815581429586a/669505f4757338eefb6b3aa7_Mask%20group-p-500.png   500w,
      https://cdn.prod.website-files.com/6645e067437815581429586a/669505f4757338eefb6b3aa7_Mask%20group-p-800.png   800w,
      https://cdn.prod.website-files.com/6645e067437815581429586a/669505f4757338eefb6b3aa7_Mask%20group-p-1080.png 1080w,
      https://cdn.prod.website-files.com/6645e067437815581429586a/669505f4757338eefb6b3aa7_Mask%20group-p-1600.png 1600w,
      https://cdn.prod.website-files.com/6645e067437815581429586a/669505f4757338eefb6b3aa7_Mask%20group.png        1724w
    "
    alt=""
    class="log-in-image"
  />
</template>

<style></style>

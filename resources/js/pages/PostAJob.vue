<template>
  <AppLayout>
  <section id="hero" class="main-banner">
    <div class="container">
      <div class="breadcrumb-block">
        <h1 class="_30px-title-white">Post a job</h1>
        <div class="text-merge">
          <a href="/" class="breadcrumb">Home</a>
          <div class="breadcrumb">/</div>
          <div class="breadcrumb">Post a job</div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-60px">
    <div class="container">
      <div class="job-post-form w-form">
        <form
          id="wf-form-Job-Post"
          name="wf-form-Job-Post"
          data-name="Job Post"
          method="get"
          data-wf-page-id="66559971aee6d0c5f3cd7dad"
          data-wf-element-id="aed46ead-455e-b4af-f1e9-ad338963b003"
          aria-label="Job Post"
        >
          <div class="form-part">
            <div class="form-title-block">
              <div class="_30px-title">Company Info</div>
            </div>
            <div class="form-input-blocks">
              <label for="Company-Name-4" class="job-form-label"
                >Company name</label
              ><input
                class="input-field-60px w-input"
                maxlength="256"
                name="Company-Name"
                data-name="Company Name"
                placeholder=""
                type="text"
                id="Company-Name-4"
                required
              /><label for="Company-Details" class="job-form-label"
                >Company Details</label
              ><input
                class="input-field-60px w-input"
                maxlength="256"
                name="Company-Details"
                data-name="Company Details"
                placeholder=""
                type="text"
                id="Company-Details"
                required
              /><label for="Company-Website" class="job-form-label"
                >Company Website</label
              ><input
                class="input-field-60px w-input"
                maxlength="256"
                name="Company-Website"
                data-name="Company Website"
                placeholder=""
                type="text"
                id="Company-Website"
                required
              />
            </div>
          </div>
          <div class="form-part">
            <div class="form-title-block">
              <div class="_30px-title">Job Details</div>
            </div>
            <div class="form-input-blocks">
              <label for="Job-Title" class="job-form-label">Job Title</label
              ><input
                class="input-field-60px w-input"
                maxlength="256"
                name="Job-Title"
                data-name="Job Title"
                placeholder=""
                type="text"
                id="Job-Title"
                required
              /><label for="Job-Description" class="job-form-label"
                >Job Description</label
              ><textarea
                id="Job-Description"
                name="Job-Description"
                maxlength="5000"
                data-name="Job Description"
                placeholder=""
                required
                class="input-field-60px text-area-field w-input"
              ></textarea>
            </div>
          </div>
          <div class="form-part no-border">
            <div class="form-title-block">
              <div class="_30px-title">Job Information</div>
            </div>
            <div class="form-button-input-block">
              <div class="form-input-blocks-wrapper">
                <div class="form-input-blocks">
                  <label for="job-category" class="job-form-label"
                    >Job Category Name</label
                  ><input
                    class="input-field-60px w-input"
                    maxlength="256"
                    name="job-category"
                    data-name="job category"
                    placeholder=""
                    type="text"
                    id="job-category"
                    required
                  /><label for="Job-location" class="job-form-label"
                    >Job Location</label
                  ><input
                    class="input-field-60px w-input"
                    maxlength="256"
                    name="Job-location"
                    data-name="Job location"
                    placeholder=""
                    type="text"
                    id="Job-location"
                    required
                  /><label for="deadline-date" class="job-form-label"
                    >Application Deadline Date</label
                  ><input
                    class="input-field-60px w-input"
                    maxlength="256"
                    name="deadline-date"
                    data-name="deadline date"
                    placeholder=""
                    type="text"
                    id="deadline-date"
                    required
                  /><label for="Number" class="job-form-label"
                    >Phone Number</label
                  ><input
                    class="input-field-60px w-input"
                    maxlength="256"
                    name="Number"
                    data-name="Number"
                    placeholder=""
                    type="tel"
                    id="Number"
                    required
                  /><label for="Salary-Min" class="job-form-label"
                    >Minimum Salary</label
                  ><input
                    class="input-field-60px w-input"
                    maxlength="256"
                    name="Salary-Min"
                    data-name="Salary Min"
                    placeholder=""
                    type="text"
                    id="Salary-Min"
                    required
                  /><label for="Gender-2" class="job-form-label">Gender</label
                  ><input
                    class="input-field-60px w-input"
                    maxlength="256"
                    name="Gender"
                    data-name="Gender"
                    placeholder=""
                    type="text"
                    id="Gender-2"
                    required
                  /><label for="Qualification" class="job-form-label"
                    >Qualifications</label
                  ><input
                    class="input-field-60px w-input"
                    maxlength="256"
                    name="Qualification"
                    data-name="Qualification"
                    placeholder=""
                    type="text"
                    id="Qualification"
                    required
                  />
                </div>
                <div class="form-input-blocks">
                  <label for="field" class="job-form-label">Job Type</label
                  ><select
                    id="field"
                    name="field"
                    data-name="Field"
                    required
                    class="input-field-60px w-select"
                  >
                    <option value="">Select Job Type...</option>
                    <option value="First">Full Time</option>
                    <option value="Second">Part Time</option>
                    <option value="Third">Remote</option></select
                  ><label for="location" class="job-form-label"
                    >Location Type</label
                  ><select
                    id="location"
                    name="location"
                    data-name="location"
                    required
                    class="input-field-60px w-select"
                  >
                    <option value="">Select Location Type...</option>
                    <option value="first">On House</option>
                    <option value="Second">Remote</option></select
                  ><label for="Apply-Email" class="job-form-label"
                    >Apply Email</label
                  ><input
                    class="input-field-60px w-input"
                    maxlength="256"
                    name="Apply-Email"
                    data-name="Apply Email"
                    placeholder=""
                    type="email"
                    id="Apply-Email"
                    required
                  /><label for="Salary-Type" class="job-form-label"
                    >Salary Type</label
                  ><input
                    class="input-field-60px w-input"
                    maxlength="256"
                    name="Salary-Type"
                    data-name="Salary Type"
                    placeholder=""
                    type="text"
                    id="Salary-Type"
                    required
                  /><label for="Salary-Max" class="job-form-label"
                    >Maximum Salary</label
                  ><input
                    class="input-field-60px w-input"
                    maxlength="256"
                    name="Salary-Max"
                    data-name="Salary Max"
                    placeholder=""
                    type="text"
                    id="Salary-Max"
                    required
                  /><label for="Industry" class="job-form-label">Industry</label
                  ><input
                    class="input-field-60px w-input"
                    maxlength="256"
                    name="Industry"
                    data-name="Industry"
                    placeholder=""
                    type="text"
                    id="Industry"
                    required
                  /><label for="Career-Level" class="job-form-label"
                    >Career Level</label
                  ><input
                    class="input-field-60px w-input"
                    maxlength="256"
                    name="Career-Level"
                    data-name="Career Level"
                    placeholder=""
                    type="text"
                    id="Career-Level"
                    required
                  />
                </div>
              </div>
              <input
                type="submit"
                data-wait="Please wait..."
                class="job-post-button w-button"
                value="Post Job Now"
              />
            </div>
          </div>
        </form>
        <div
          class="success-message w-form-done"
          tabindex="-1"
          role="region"
          aria-label="Job Post success"
        >
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div
          class="error-message w-form-fail"
          tabindex="-1"
          role="region"
          aria-label="Job Post failure"
        >
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
  </section>
  </AppLayout>
</template>

<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import AOS from 'aos';
import 'aos/dist/aos.css';
import { onMounted } from 'vue';

onMounted(() => {
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        mirror: false,
    });
});
</script>

<style></style>

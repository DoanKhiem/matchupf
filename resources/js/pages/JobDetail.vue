<template>
    <AppLayout>
        <section id="hero" class="main-banner">
            <div class="container">
                <div class="breadcrumb-block" data-aos="fade-up">
                    <h1 class="_30px-title-white">Job Details</h1>
                    <div class="text-merge">
                        <a href="/" class="breadcrumb">Home</a>
                        <div class="breadcrumb">/</div>
                        <div class="breadcrumb">Jobs</div>
                        <div class="breadcrumb">/</div>
                        <div class="breadcrumb">{{ job?.title || 'Job Details' }}</div>
                    </div>
                </div>
            </div>
        </section>
        <div class="page-wrapper" v-if="job">
            <section class="_60px-margin-section">
                <div class="container">
                    <div class="_2-column-block-top">
                        <div class="w-layout-vflex sidebar" data-aos="fade-right" data-aos-delay="100">
                            <div class="w-layout-vflex job-details-block-left-align">
                                <div class="w-layout-hflex job-info-block">
                                    <img src="/images/map-pin-line.png" loading="lazy" alt="" class="image-24px margin-top-3px" />
                                    <div class="vertical-left-top _4px-gap">
                                        <div class="_20px-500">Location:</div>
                                        <p class="_16px-500">{{ job.location }}</p>
                                    </div>
                                </div>
                                <div class="w-layout-hflex job-info-block">
                                    <img src="/images/time-line.png" loading="lazy" alt="" class="image-24px margin-top-3px" />
                                    <div class="vertical-left-top _4px-gap">
                                        <div class="_20px-500">Job type:</div>
                                        <p class="_16px-500">{{ job.type }}</p>
                                    </div>
                                </div>
                                <div class="w-layout-hflex job-info-block">
                                    <img src="/images/money-dollar-box-line.png" loading="lazy" alt="" class="image-24px margin-top-3px" />
                                    <div class="vertical-left-top _4px-gap">
                                        <div class="_20px-500">Salary Range:</div>
                                        <p class="_16px-500">{{ job.salary }}</p>
                                    </div>
                                </div>
                                <div class="w-layout-hflex job-info-block last">
                                    <img src="/images/user-line.png" loading="lazy" alt="" class="image-24px margin-top-3px" />
                                    <div class="vertical-left-top _4px-gap">
                                        <div class="_20px-500">Experience:</div>
                                        <div class="text-merge">
                                            <p class="_16px-500">{{ job.experience }}</p>
                                        </div>
                                    </div>
                                </div>
                                <a data-w-id="081325f6-2dc0-8ac3-8042-83b3e7870577" href="#" class="primary-button full-button w-inline-block">
                                    <div class="button-text-wrapper">
                                        <div class="default-text">Apply Now</div>
                                        <div class="hover-text">Apply Now</div>
                                    </div>
                                    <div class="icon-18px">chevron_right</div>
                                </a>
                            </div>
                            <div class="w-layout-vflex job-details-block">
                                <img :src="job.company.logo" loading="lazy" alt="" class="image-60px" />
                                <div class="margin-bottom-10px">
                                    <div class="_30px-title">{{ job.company.name }}</div>
                                </div>
                                <p class="primary-200">
                                    {{ job.company.description }}
                                </p>
                                <div class="w-layout-vflex job-details-wrapper">
                                    <div class="w-layout-hflex job-between-block">
                                        <div class="w-layout-hflex _8px-gap">
                                            <img src="/images/briefcase-line.svg" loading="lazy" alt="" class="image-24px margin-top-3px" />
                                            <div class="job-meta-text">Primary Industry</div>
                                        </div>
                                        <div class="_14px-neutral-200">{{ job.company.industry }}</div>
                                    </div>
                                    <div class="w-layout-hflex job-between-block">
                                        <div class="w-layout-hflex _8px-gap">
                                            <img src="/images/home-4-line.svg" loading="lazy" alt="" class="image-24px margin-top-3px" />
                                            <div class="job-meta-text">Founded in</div>
                                        </div>
                                        <div class="_14px-neutral-200">{{ job.company.founded }}</div>
                                    </div>
                                    <div class="w-layout-hflex job-between-block">
                                        <div class="w-layout-hflex _8px-gap">
                                            <img src="/images/shape-2-fill.svg" loading="lazy" alt="" class="image-24px margin-top-3px" />
                                            <div class="job-meta-text">Company size</div>
                                        </div>
                                        <div class="_14px-neutral-200">{{ job.company.size }}</div>
                                    </div>
                                    <div class="w-layout-hflex job-between-block">
                                        <div class="w-layout-hflex _8px-gap">
                                            <img src="/images/map-pin-line.svg" loading="lazy" alt="" class="image-24px margin-top-3px" />
                                            <div class="job-meta-text">Location</div>
                                        </div>
                                        <div class="_14px-neutral-200">{{ job.location }}</div>
                                    </div>
                                    <div class="w-layout-hflex job-between-block">
                                        <div class="w-layout-hflex _8px-gap">
                                            <img src="/images/global-line.svg" loading="lazy" alt="" class="image-24px margin-top-3px" />
                                            <div class="job-meta-text">Website</div>
                                        </div>
                                        <a :href="job.company.website" class="_14px-neutral-200">Visit Site</a>
                                    </div>
                                    <div class="w-layout-hflex job-between-block">
                                        <div class="w-layout-hflex _8px-gap">
                                            <img src="/images/links-line.svg" loading="lazy" alt="" class="image-24px margin-top-3px" />
                                            <div class="job-meta-text">Social Profile</div>
                                        </div>
                                        <div class="horizontal-left-center-20px-gap">
                                            <a :href="job.company.social.facebook" target="_blank" class="social-icon-links-gray"></a
                                            ><a :href="job.company.social.instagram" target="_blank" class="social-icon-links-gray instagram"></a
                                            ><a :href="job.company.social.twitter" target="_blank" class="social-icon-links-gray twitter"></a
                                            ><a :href="job.company.social.linkedin" target="_blank" class="social-icon-links-gray linkedin"></a>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="apply-button-with-hover full-button w-inline-block">
                                    <div>View Company Profile</div>
                                    <div class="icon">chevron_right</div>
                                </a>
                            </div>
                        </div>
                        <div class="main-block" data-aos="fade-left" data-aos-delay="200">
                            <div class="job-rich-text w-richtext">
                                <h4>Job Description</h4>
                                <p v-for="(paragraph, index) in job.description.split('\n\n')" :key="index">
                                    {{ paragraph }}
                                </p>
                                <h4>Responsibilities</h4>
                                <ul role="list">
                                    <li v-for="(responsibility, index) in job.responsibilities" :key="index">
                                        {{ responsibility }}
                                    </li>
                                </ul>
                                <h4>Required Skills</h4>
                                <ul role="list">
                                    <li v-for="(skill, index) in job.skills" :key="index">
                                        {{ skill }}
                                    </li>
                                </ul>
                            </div>
                            <div class="blur-div-470px-size right-middle"></div>
                        </div>
                    </div>
                    <div class="blur-div-470px-size"></div>
                    <div class="blur-div-470px-size bottom-left"></div>
                    <div class="blur-div-470px-size right-middle"></div>
                </div>
            </section>
        </div>
    </AppLayout>
</template>

<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { usePage } from '@inertiajs/vue3';
import AOS from 'aos';
import 'aos/dist/aos.css';
import { onMounted, ref } from 'vue';

interface Job {
    id: string;
    title: string;
    location: string;
    type: string;
    salary: string;
    experience: string;
    company: {
        name: string;
        logo: string;
        description: string;
        industry: string;
        founded: string;
        size: string;
        website: string;
        social: {
            facebook: string;
            instagram: string;
            twitter: string;
            linkedin: string;
        };
    };
    description: string;
    responsibilities: string[];
    skills: string[];
}

//   const route = useRoute();
const job = ref<Job | null>(null);

// Mock job data - replace with actual API call later
const jobs: Job[] = [
    {
        id: 'senior-frontend-engineer',
        title: 'SENIOR FRONTEND ENGINEER',
        location: 'ThaiLand',
        type: 'Full Time',
        salary: '$35K',
        experience: '4 years',
        company: {
            name: 'Innovixio',
            logo: '/images/Group103.webp',
            description: 'Innovixio: Crafting innovative software solutions for a digital world',
            industry: 'UI / UX Design',
            founded: '1890',
            size: '100-500 City',
            website: 'https://templates.themencode.com/template/',
            social: {
                facebook: 'https://www.facebook.com/ThemeNcode',
                instagram: 'https://www.instagram.com/themencode_com/',
                twitter: 'https://twitter.com/ThemeNcode',
                linkedin: 'https://www.linkedin.com/company/themencode',
            },
        },
        description: `Develop and Maintain Web Applications: Build, maintain, and optimize the front end of web applications using HTML, CSS, JavaScript, and either React or Vue.js.
  
  Design Implementation: Ensure all web applications are fully responsive and provide a seamless user experience across various devices and screen sizes.
  
  UX/UI Design: Apply strong UX/UI principles to ensure intuitive and user-friendly interfaces, enhancing overall user satisfaction.
  
  Framework Implementation: Utilize modern JavaScript frameworks such as React or Vue to build dynamic and interactive user interfaces. Leverage component-based architecture for code reusability and maintainability.
  
  Collaborate with Design and Backend Teams: Work closely with UX/UI designers to translate visual designs into functional code and ensure a seamless user experience. Collaborate with backend developers to integrate front-end components with server-side logic.
  
  Code Optimization and Performance Tuning: Optimize applications for maximum speed and scalability. Identify and address performance bottlenecks, ensuring a smooth and efficient user experience.
  
  Contribute to Code Optimization: Write clean, well-structured, and maintainable code with a focus on performance and scalability.
  
  PHP Integration (If Applicable): If your applications involve PHP, you will be expected to integrate front-end components with PHP backends and ensure seamless data flow.
  
  Troubleshoot and Debug: Identify and resolve front-end issues, ensuring optimal performance and usability.
  
  Stay Current: Keep up-to-date with the latest trends and best practices in front-end development and UX/UI design, and contribute to continuous improvement initiatives.`,
        responsibilities: [
            'Conduct user research to understand user behaviors, needs, and pain points through methods such as interviews, surveys, and user testing.',
            'Create wireframes to outline the layout and structure of digital interfaces, ensuring usability and intuitive navigation.',
            'Develop interactive prototypes to visualize design concepts and gather feedback from stakeholders and users.',
            'Design visually appealing user interfaces that align with branding guidelines, focusing on aesthetics, typography, and color theory.',
            'Define interactive elements and transitions to enhance user engagement and facilitate intuitive interactions with digital products.',
            'Organize and structure content logically to optimize usability and accessibility, considering user goals and tasks.',
        ],
        skills: [
            'Ability to empathize with users, understand their needs, behaviors, and pain points, and design solutions that address these aspects effectively.',
            'Proficiency in graphic design principles, including layout, typography, color theory, and iconography, to create visually appealing and coherent user interfaces.',
            'Skill in designing interactive elements, user flows, and transitions that enhance usability and create intuitive user experiences.',
            'Proficiency in using wireframing and prototyping tools to create low-fidelity and high-fidelity prototypes that visualize design concepts and interactions.',
            'Ability to organize and structure content in a logical and user-friendly manner, ensuring findability and ease of navigation within digital products.',
            'Strong problem-solving skills to identify user pain points, propose creative design solutions, and iterate on designs based on user feedback and testing results.',
        ],
    },
    {
        id: 'senior-digital-marketing',
        title: 'SENIOR DIGITAL MARKETING',
        location: 'ThaiLand',
        type: 'Full Time',
        salary: '$35K',
        experience: '4 years',
        company: {
            name: 'Innovixio',
            logo: '/images/Group103.webp',
            description: 'Innovixio: Crafting innovative software solutions for a digital world',
            industry: 'Digital Marketing',
            founded: '1890',
            size: '100-500 City',
            website: 'https://templates.themencode.com/template/',
            social: {
                facebook: 'https://www.facebook.com/ThemeNcode',
                instagram: 'https://www.instagram.com/themencode_com/',
                twitter: 'https://twitter.com/ThemeNcode',
                linkedin: 'https://www.linkedin.com/company/themencode',
            },
        },
        description: `Plan, execute and manage all digital marketing activities for MKT, including advertising campaigns, SEM, email marketing and social media.
  
  Establish and execute strategies to share marketing content to digital platforms.
  
  Manage and work with content production teams, related service providers to maintain the company's presence on online platforms (Facebook, Google, Twitter, etc.).
  
  Maintain consistent brand messaging across all social media channels.
  
  Identify, analyze and measure trends and content to evaluate performance and optimize user experience.
  
  Create and maintain an editorial calendar to deliver marketing content, promote the brand.
  
  Create and manage advertising campaigns (Facebook, Google, Coccoc, Bing, Twitter, etc.) for Company website, social media, email and other forms of digital channel communication.
  
  Research, monitor and analyze customer behavior and apply the research to digital marketing campaigns.
  
  Prepare reports and analyze the overall performance of marketing campaigns, including ROI and KPIs.
  
  Collaborate with related departments to come up with new creative ideas on growth strategies and marketing techniques.
  
  Develop and monitor campaign budgets.
  
  Update the latest social media trends and apply to marketing campaigns.`,
        responsibilities: [
            'Plan, execute and manage all digital marketing activities for MKT, including advertising campaigns, SEM, email marketing and social media',
            'Establish and execute strategies to share marketing content to digital platforms',
            "Manage and work with content production teams, related service providers to maintain the company's presence on online platforms",
            'Maintain consistent brand messaging across all social media channels',
            'Identify, analyze and measure trends and content to evaluate performance and optimize user experience',
            'Create and maintain an editorial calendar to deliver marketing content, promote the brand',
            'Create and manage advertising campaigns for Company website, social media, email and other forms of digital channel communication',
            'Research, monitor and analyze customer behavior and apply the research to digital marketing campaigns',
            'Prepare reports and analyze the overall performance of marketing campaigns, including ROI and KPIs',
            'Collaborate with related departments to come up with new creative ideas on growth strategies and marketing techniques',
            'Develop and monitor campaign budgets',
            'Update the latest social media trends and apply to marketing campaigns',
        ],
        skills: [
            'Experience in digital marketing or related fields',
            'Proficiency in image and video editing software',
            'Experience with SEM strategies and keyword research',
            'Understanding of website analytics tools, such as Google Analytics',
            'Hard-working, responsible and able to work under pressure',
            'Deep knowledge of advertising platforms and advertising booking methods (FB, GG, Twitter)',
            'Social-media-savvy, with an eye for new trends',
            'Extensive knowledge of social media platforms and marketing best practices',
            'Ability to analyze user metrics, reports and trends',
            'Good communication skills, able to collaborate with other departments',
            'Project management skills',
        ],
    },
    {
        id: 'qc-manual',
        title: 'QC MANUAL',
        location: 'ThaiLand',
        type: 'Full Time',
        salary: '$35K',
        experience: '2 years',
        company: {
            name: 'Innovixio',
            logo: '/images/Group103.webp',
            description: 'Innovixio: Crafting innovative software solutions for a digital world',
            industry: 'Quality Assurance',
            founded: '1890',
            size: '100-500 City',
            website: 'https://templates.themencode.com/template/',
            social: {
                facebook: 'https://www.facebook.com/ThemeNcode',
                instagram: 'https://www.instagram.com/themencode_com/',
                twitter: 'https://twitter.com/ThemeNcode',
                linkedin: 'https://www.linkedin.com/company/themencode',
            },
        },
        description: `Execute comprehensive quality assurance tests on software applications, websites, and IT systems to identify defects, anomalies, and areas for improvement.
  
  Collaborate with software development teams to create detailed test plans and test cases based on project requirements and technical specifications.
  
  Conduct various types of testing, including functional, regression, performance, and security testing, to validate the functionality and reliability of IT systems.
  
  Report and track defects and issues using a designated bug-tracking system, working closely with developers to resolve and retest defects.
  
  Document test procedures, results, and deviations from quality standards, and prepare test summary reports.
  
  Ensure compliance with IT quality standards, industry best practices, and security regulations.
  
  Collaborate with IT teams to identify areas for process improvement and participate in process enhancement initiatives.
  
  Perform other tasks as assigned by the Line Manager.`,
        responsibilities: [
            'Execute comprehensive quality assurance tests on software applications, websites, and IT systems to identify defects, anomalies, and areas for improvement',
            'Collaborate with software development teams to create detailed test plans and test cases based on project requirements and technical specifications',
            'Conduct various types of testing, including functional, regression, performance, and security testing, to validate the functionality and reliability of IT systems',
            'Report and track defects and issues using a designated bug-tracking system, working closely with developers to resolve and retest defects',
            'Document test procedures, results, and deviations from quality standards, and prepare test summary reports',
            'Ensure compliance with IT quality standards, industry best practices, and security regulations',
            'Collaborate with IT teams to identify areas for process improvement and participate in process enhancement initiatives',
            'Perform other tasks as assigned by the Line Manager',
        ],
        skills: [
            "Bachelor's degree in Computer Science, Information Technology, or a related field",
            'More than 2 years experience in QC Manual',
            'Strong understanding of software development methodologies',
            'Experience in performance testing, functional testing, ad-hoc/exploratory testing, and UI/UX testing on web and mobile applications',
            'Ability to thoroughly test features from requirements analysis to regression testing',
            'Experience with JIRA and Confluence',
            'Knowledge of test methods and processes',
            'Preferred experience in Agile/Scrum processes',
            'Strong logical and critical thinking skills',
            'Excellent analytical and problem-solving abilities',
            'Hard-working, honest, and proactive in work',
            'Experience working in a collaborative team environment, including participating in creative reviews and providing and receiving constructive feedback',
            'Ability to communicate concisely and effectively, with a proactive approach to communication',
            'Proficiency in English communication',
        ],
    },
    {
        id: 'senior-ux-ui-designer',
        title: 'SENIOR UX/UI DESIGNER',
        location: 'ThaiLand',
        type: 'Full Time',
        salary: '$35K',
        experience: '4 years',
        company: {
            name: 'Innovixio',
            logo: '/images/Group103.webp',
            description: 'Innovixio: Crafting innovative software solutions for a digital world',
            industry: 'UI/UX Design',
            founded: '1890',
            size: '100-500 City',
            website: 'https://templates.themencode.com/template/',
            social: {
                facebook: 'https://www.facebook.com/ThemeNcode',
                instagram: 'https://www.instagram.com/themencode_com/',
                twitter: 'https://twitter.com/ThemeNcode',
                linkedin: 'https://www.linkedin.com/company/themencode',
            },
        },
        description: `Manage the entire design architecture and user interface; build and implement strategies to optimize user experience for core competencies, functions, and products and services on app/web and satellite online channels.
  
  Implement surveys, interviews, and user research, as well as in-depth research on user behavior and needs, to convert user needs into interfaces suitable for digital experiences.
  
  Develop and prototype solutions using visualizations (wireframes), customer stories, customer journeys, and simulations optimized for user use cases.
  
  Apply human-centered design principles to handle flows, user interfaces, and underlying technologies.
  
  Collaborate with PO teams, programmers, and team members to understand business goals and translate into professional products through design language optimized for user experience.
  
  Coordinate and organize the development of published documents for internal or customer use, such as instructions for using digital banking services.
  
  Participate in digital banking development projects as a project member.`,
        responsibilities: [
            'Manage the entire design architecture and user interface; build and implement strategies to optimize user experience for core competencies, functions, and products and services on app/web and satellite online channels',
            'Implement surveys, interviews, and user research, as well as in-depth research on user behavior and needs, to convert user needs into interfaces suitable for digital experiences',
            'Develop and prototype solutions using visualizations (wireframes), customer stories, customer journeys, and simulations optimized for user use cases',
            'Apply human-centered design principles to handle flows, user interfaces, and underlying technologies',
            'Collaborate with PO teams, programmers, and team members to understand business goals and translate into professional products through design language optimized for user experience',
            'Coordinate and organize the development of published documents for internal or customer use, such as instructions for using digital banking services',
            'Participate in digital banking development projects as a project member',
        ],
        skills: [
            "Bachelor's degree in Design, Marketing or related majors",
            'Minimum 4 years of experience in similar positions',
            'Have in-depth knowledge and experience in user experience design and UI/UX related skills',
            'Certifications related to UI/UX Design, Design Thinking, and Agile are an advantage',
            'Proficient in Visual design tools such as Figma, Adobe Suite, Photoshop, Illustrator, etc',
            'Experience in Video Editing using Davinci Resolve Studio, Adobe Premiere Pro, After Effects, etc',
            'Experience in Agency Promotion Video is a plus',
            'Experience in making short videos using Canva/Capcut',
            'Technical knowledge such as integrated programming is an advantage',
            'Experienced in implementing user surveys, usability testing, and A/B testing',
            'Understanding of banking products and services, especially in the digital banking segment',
            'Teamwork and independent working skills',
            'Communication and time management skills',
            'Good in both reading and writing in English is preferred',
        ],
    },
];

onMounted(() => {
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        mirror: false,
    });
    

    // Get jobId from Inertia page props
    const jobId = usePage().props.slug as string;
    console.log(usePage().props);
    job.value = jobs.find((j) => j.id === jobId) || null;
});
</script>

<style scoped></style>

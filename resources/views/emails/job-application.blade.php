<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Job Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .content {
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .field {
            margin-bottom: 15px;
        }
        .field-label {
            font-weight: bold;
            color: #555;
        }
        .field-value {
            margin-top: 5px;
            padding: 10px;
            background-color: #f8f9fa;
            border-radius: 3px;
        }
        .job-info {
            background-color: #e3f2fd;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>New Job Application Received</h2>
        <p>A new application has been submitted for the following position:</p>
    </div>

    <div class="job-info">
        <h3>{{ $job->title }}</h3>
        <p><strong>Company:</strong> {{ $job->company->name ?? 'N/A' }}</p>
        <p><strong>Location:</strong> {{ $job->location }}</p>
        <p><strong>Type:</strong> {{ $job->type }}</p>
    </div>

    <div class="content">
        <h3>Applicant Information</h3>
        
        <div class="field">
            <div class="field-label">Name:</div>
            <div class="field-value">{{ $applicationData['name'] }}</div>
        </div>

        <div class="field">
            <div class="field-label">Email:</div>
            <div class="field-value">{{ $applicationData['email'] }}</div>
        </div>

        @if(isset($applicationData['cv']) && $applicationData['cv'])
        <div class="field">
            <div class="field-label">CV File:</div>
            <div class="field-value">{{ $applicationData['cv']->getClientOriginalName() }}</div>
        </div>
        @endif

        @if(isset($applicationData['message']) && $applicationData['message'])
        <div class="field">
            <div class="field-label">Message:</div>
            <div class="field-value">{{ $applicationData['message'] }}</div>
        </div>
        @endif

        <div class="field">
            <div class="field-label">Application Date:</div>
            <div class="field-value">{{ now()->format('F j, Y \a\t g:i A') }}</div>
        </div>
    </div>

    <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #ddd; font-size: 12px; color: #666;">
        <p>This email was sent from your job application system.</p>
    </div>
</body>
</html> 
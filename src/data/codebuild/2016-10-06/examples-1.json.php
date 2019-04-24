<?php
// This file was auto-generated from sdk-root/src/data/codebuild/2016-10-06/examples-1.json
return [ 'version' => '1.0', 'examples' => [ 'BatchGetBuilds' => [ [ 'input' => [ 'ids' => [ 'codebuild-demo-project:9b0ac37f-d19e-4254-9079-f47e9a389eEX', 'codebuild-demo-project:b79a46f7-1473-4636-a23f-da9c45c208EX', ], ], 'output' => [ 'builds' => [ [ 'arn' => 'arn:aws:codebuild:us-east-1:123456789012:build/codebuild-demo-project:9b0ac37f-d19e-4254-9079-f47e9a389eEX', 'artifacts' => [ 'location' => 'arn:aws:s3:::codebuild-123456789012-output-bucket/codebuild-demo-project', ], 'buildComplete' => true, 'buildStatus' => 'SUCCEEDED', 'currentPhase' => 'COMPLETED', 'endTime' => 1479832474.7639999, 'environment' => [ 'type' => 'LINUX_CONTAINER', 'computeType' => 'BUILD_GENERAL1_SMALL', 'environmentVariables' => [], 'image' => 'aws/codebuild/java:openjdk-8', 'privilegedMode' => false, ], 'id' => 'codebuild-demo-project:9b0ac37f-d19e-4254-9079-f47e9a389eEX', 'initiator' => 'MyDemoUser', 'logs' => [ 'deepLink' => 'https://console.aws.amazon.com/cloudwatch/home?region=us-east-1#logEvent:group=/aws/codebuild/codebuild-demo-project;stream=9b0ac37f-d19e-4254-9079-f47e9a389eEX', 'groupName' => '/aws/codebuild/codebuild-demo-project', 'streamName' => '9b0ac37f-d19e-4254-9079-f47e9a389eEX', ], 'phases' => [ [ 'durationInSeconds' => 0, 'endTime' => 1479832342.23, 'phaseStatus' => 'SUCCEEDED', 'phaseType' => 'SUBMITTED', 'startTime' => 1479832341.8540001, ], [ 'contexts' => [], 'durationInSeconds' => 72, 'endTime' => 1479832415.0639999, 'phaseStatus' => 'SUCCEEDED', 'phaseType' => 'PROVISIONING', 'startTime' => 1479832342.23, ], [ 'contexts' => [], 'durationInSeconds' => 46, 'endTime' => 1479832461.2609999, 'phaseStatus' => 'SUCCEEDED', 'phaseType' => 'DOWNLOAD_SOURCE', 'startTime' => 1479832415.0639999, ], [ 'contexts' => [], 'durationInSeconds' => 0, 'endTime' => 1479832461.3540001, 'phaseStatus' => 'SUCCEEDED', 'phaseType' => 'INSTALL', 'startTime' => 1479832461.2609999, ], [ 'contexts' => [], 'durationInSeconds' => 0, 'endTime' => 1479832461.448, 'phaseStatus' => 'SUCCEEDED', 'phaseType' => 'PRE_BUILD', 'startTime' => 1479832461.3540001, ], [ 'contexts' => [], 'durationInSeconds' => 9, 'endTime' => 1479832471.115, 'phaseStatus' => 'SUCCEEDED', 'phaseType' => 'BUILD', 'startTime' => 1479832461.448, ], [ 'contexts' => [], 'durationInSeconds' => 0, 'endTime' => 1479832471.224, 'phaseStatus' => 'SUCCEEDED', 'phaseType' => 'POST_BUILD', 'startTime' => 1479832471.115, ], [ 'contexts' => [], 'durationInSeconds' => 0, 'endTime' => 1479832471.7909999, 'phaseStatus' => 'SUCCEEDED', 'phaseType' => 'UPLOAD_ARTIFACTS', 'startTime' => 1479832471.224, ], [ 'contexts' => [], 'durationInSeconds' => 2, 'endTime' => 1479832474.7639999, 'phaseStatus' => 'SUCCEEDED', 'phaseType' => 'FINALIZING', 'startTime' => 1479832471.7909999, ], [ 'phaseType' => 'COMPLETED', 'startTime' => 1479832474.7639999, ], ], 'projectName' => 'codebuild-demo-project', 'source' => [ 'type' => 'S3', 'buildspec' => '', 'location' => 'arn:aws:s3:::codebuild-123456789012-input-bucket/MessageUtil.zip', ], 'startTime' => 1479832341.8540001, 'timeoutInMinutes' => 60, ], [ 'arn' => 'arn:aws:codebuild:us-east-1:123456789012:build/codebuild-demo-project:b79a46f7-1473-4636-a23f-da9c45c208EX', 'artifacts' => [ 'location' => 'arn:aws:s3:::codebuild-123456789012-output-bucket/codebuild-demo-project', ], 'buildComplete' => true, 'buildStatus' => 'SUCCEEDED', 'currentPhase' => 'COMPLETED', 'endTime' => 1479401214.2390001, 'environment' => [ 'type' => 'LINUX_CONTAINER', 'computeType' => 'BUILD_GENERAL1_SMALL', 'environmentVariables' => [], 'image' => 'aws/codebuild/java:openjdk-8', 'privilegedMode' => false, ], 'id' => 'codebuild-demo-project:b79a46f7-1473-4636-a23f-da9c45c208EX', 'initiator' => 'MyDemoUser', 'logs' => [ 'deepLink' => 'https://console.aws.amazon.com/cloudwatch/home?region=us-east-1#logEvent:group=/aws/codebuild/codebuild-demo-project;stream=b79a46f7-1473-4636-a23f-da9c45c208EX', 'groupName' => '/aws/codebuild/codebuild-demo-project', 'streamName' => 'b79a46f7-1473-4636-a23f-da9c45c208EX', ], 'phases' => [ [ 'durationInSeconds' => 0, 'endTime' => 1479401082.342, 'phaseStatus' => 'SUCCEEDED', 'phaseType' => 'SUBMITTED', 'startTime' => 1479401081.869, ], [ 'contexts' => [], 'durationInSeconds' => 71, 'endTime' => 1479401154.1289999, 'phaseStatus' => 'SUCCEEDED', 'phaseType' => 'PROVISIONING', 'startTime' => 1479401082.342, ], [ 'contexts' => [], 'durationInSeconds' => 45, 'endTime' => 1479401199.1359999, 'phaseStatus' => 'SUCCEEDED', 'phaseType' => 'DOWNLOAD_SOURCE', 'startTime' => 1479401154.1289999, ], [ 'contexts' => [], 'durationInSeconds' => 0, 'endTime' => 1479401199.2360001, 'phaseStatus' => 'SUCCEEDED', 'phaseType' => 'INSTALL', 'startTime' => 1479401199.1359999, ], [ 'contexts' => [], 'durationInSeconds' => 0, 'endTime' => 1479401199.345, 'phaseStatus' => 'SUCCEEDED', 'phaseType' => 'PRE_BUILD', 'startTime' => 1479401199.2360001, ], [ 'contexts' => [], 'durationInSeconds' => 9, 'endTime' => 1479401208.6800001, 'phaseStatus' => 'SUCCEEDED', 'phaseType' => 'BUILD', 'startTime' => 1479401199.345, ], [ 'contexts' => [], 'durationInSeconds' => 0, 'endTime' => 1479401208.783, 'phaseStatus' => 'SUCCEEDED', 'phaseType' => 'POST_BUILD', 'startTime' => 1479401208.6800001, ], [ 'contexts' => [], 'durationInSeconds' => 0, 'endTime' => 1479401209.4630001, 'phaseStatus' => 'SUCCEEDED', 'phaseType' => 'UPLOAD_ARTIFACTS', 'startTime' => 1479401208.783, ], [ 'contexts' => [], 'durationInSeconds' => 4, 'endTime' => 1479401214.2390001, 'phaseStatus' => 'SUCCEEDED', 'phaseType' => 'FINALIZING', 'startTime' => 1479401209.4630001, ], [ 'phaseType' => 'COMPLETED', 'startTime' => 1479401214.2390001, ], ], 'projectName' => 'codebuild-demo-project', 'source' => [ 'type' => 'S3', 'location' => 'arn:aws:s3:::codebuild-123456789012-input-bucket/MessageUtil.zip', ], 'startTime' => 1479401081.869, 'timeoutInMinutes' => 60, ], ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The following example gets information about builds with the specified build IDs.', 'id' => 'to-get-information-about-builds-1501187184588', 'title' => 'To get information about builds', ], ], ],];
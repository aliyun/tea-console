Pod::Spec.new do |spec|

  spec.name         = "AlibabacloudTeaConsole"
  spec.version      = "1.0.0"
  spec.license      = "Apache 2.0"
  spec.summary      = "Alibaba Cloud Tea Console Output Library for Swift(5.6)"
  spec.homepage     = "https://github.com/alibabacloud-sdk-swift/darabonba-console" 
  spec.author       = { "Alibaba Cloud SDK" => "sdk-team@alibabacloud.com" }

  spec.source       = { :git => spec.homepage + '.git', :tag => spec.version }
  spec.source_files = 'Sources/**/*.swift'

  spec.ios.framework   = 'Foundation'

  spec.ios.deployment_target     = '13.0'
  spec.osx.deployment_target     = '10.15'
  spec.watchos.deployment_target = '6.0'
  spec.tvos.deployment_target    = '13.0'

  spec.swift_version='5.6'
end

# cloudformation 실습 - yaml 사용

***

vpc : 기본 vpc 구성

vpc-parameter : 파라미터를 사용한 기본 vpc 구성

-- images의 vpc 참고

***

ec2 : 간단 vpc + APM 설치된 ec2 생성

ec2-mapping : 매핑을 사용해보기 위한 ec2파일 수정 / Linux2와 Windows2019중 ami 선택 가능

ec2-mapping-simple : Linux2만 사용할 앞으로의 실습을 위해 최대한 간단하게 수정

-- images의 ec2rds 참고

ec2rds : vpc + APM 설치된 ec2 + 다중 가용 영역 RDS (for MySQL)

-- images의 ec2rds-modified 참고

***

iam-user : AdministratorAccess 정책 적용한 User 생성

iam-user-policy : AdministratorAccess 정책 적용한 Policy를 만들어 User에 적용

***

asg-vpc : Auto Scaling Group 시작하기 전 vpc, ec2 구성

autoscaling : LC + ALB + target group + listener + ASG + ASG policy(CPU)

-- images의 asg 참고

***

webstress.php : 웹에서 서버에 부하를 주고 끄기 위한 php

***

VPCforTGW : Transit Gateway 실습 위한 vpc 구성 - main number 설정해주면 그에 맞게 vpc와 ec2들 생성됨 -> 여러 개 생성

-- images의 tgw 

***

자세한 정리 : <http://honglab.tistory.com/category/공부/AWS>

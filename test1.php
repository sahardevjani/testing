<?php
	$studentInfo = 
					[
						"studentsData" => [
										"student1" => 
										[
										"Name" => "sahar",
										"Age" => "18",
										"Rollnumber" => "2019508",
										"status" => "1","<br>"
                    ],
										"student2" => 
										[
										"Name" => "sara",
										"Age" => "19",
										"Rollnumber" => "2019516", 
										"status" => "0","<br>"
                    ],
										"student3" => 
										[
										"Name" => "zara",
										"Age" => "21",
										"Rollnumber" => "2019500", 
										"status" => "1","<br>"
                    ],
										"student4" =>
										[
										"Name" => "rida",
										"Age" => "20",
										"Rollnumber" => "2019506", 
										"status" => "0","<br>"
                    ],
										"student5" => 
										[
										"Name" => "urooj",
										"Age" => "17",
										"Rollnumber" => "2019511", 
										"status" => "1","<br>"
                    ],
									],
                ];

					foreach ($studentInfo as $student) {
						if ("status" == 1) {
							echo "student    ";
						}
					}
  ?>
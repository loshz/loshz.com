dist:
	aws s3 cp . s3://danbond.io/ --recursive --exclude "*" --include "*.html" --include "site.css" --include "*.png" --include "*.jpg" --profile dan

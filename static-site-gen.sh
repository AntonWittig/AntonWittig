#!/bin/bash

declare sourceDir="public"
declare destinationDir="dist"
declare -a filesToExclude=("public/template.php")

declare -a fileEndings=("php" "html" "css" "js" "png" "jpg" "gif" "ico");
declare fileRegex="";

# Construct file filtering regex
for fileEnding in "${fileEndings[@]}";
do
	if [[ "${fileEnding}" = "${fileEndings[0]}" ]];
	then
		fileRegex=".*\.${fileEnding}";
	else
		fileRegex="${fileRegex}\|.*\.${fileEnding}"
	fi
done

# Copy files from source to destination directory
for file in $(find "${sourceDir}" -regex "${fileRegex}");
do
	if [[ "${filesToExclude[*]}" =~ "${file}" ]];
	then
		break
	fi

	relativePath=$(realpath --relative-to="${sourceDir}" "${file}" | sed "s/.php$/.html/")
	mkdir -p "${destinationDir}/$(dirname "${relativePath}")"
	newFile="${destinationDir}/${relativePath}"

	if [[ "${file}" == *".php" ]];
	then
		# Execute php on php files
		php -c . -f "${file}" > "${newFile}.tmp"
		sed -i "s/.php/.html/gm" "${newFile}.tmp"
		iconv -t UTF-8 "${newFile}.tmp" > "${newFile}"
		rm "${newFile}.tmp"
	else
		iconv -t UTF-8 "${file}" > "${newFile}"
	fi
done
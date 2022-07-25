# #! /bin/bash

# shopt -s nullglob       # Globs that match nothing expand to nothing
# shopt -s globstar       # ** matches multiple directory levels

# root_webp_dir=/var/www/themes/assets/images/webp

# for jpg_path in **/*.jpg ; do
#     jpg_file=${jpg_path##*/}
#     [[ $jpg_path == */* ]] && jpg_dir=${jpg_path%/*} || jpg_dir=.

#     webp_dir=${root_webp_dir}/${jpg_dir}
#     webp_path=${webp_dir}/${jpg_file%.jpg}.webp

#     [[ -d $webp_dir ]] || mkdir -p -- "$webp_dir"
#     cwebp -q 100 "$jpg_path" -o "$webp_path"
# done
#!/bin/bash
# find . -type d -exec ~/script.sh "{}" /;

PATH=/usr/local/bin:/usr/bin:/bin

# cd to the directory of the image so we can work with just filenames
dir="$(dirname "$1")"
cd "$dir" || exit 1

for file in *.{jpg,png}
do
    cwebp -q 90 "$file" -o "${file%%.*}.webp"
done

    # cwebp -q 90 "static/images/denise.jpg" -o "static/images/denise.webp"
# DataList="proto-company.png"
# IFS=,
# for file in $DataList;
# do
# 	cwebp -q 90 "$file" -o "${file%%.*}.webp"
# done

#!/bin/bash

# Check if a new name is provided
if [ $# -eq 0 ]; then
    echo "Please provide a new name for the extension."
    echo "Usage: ./rename_extension.sh new_extension_name"
    exit 1
fi

# Set variables
OLD_NAME="talan_basic_extension"
NEW_NAME=$1
OLD_NAMESPACE="Talan\\\\BasicExtension"
NEW_NAMESPACE=$(echo $NEW_NAME | sed -r 's/(^|_)([a-z])/\U\2/g' | sed 's/_/\\\\/g')

# Rename the main folder
mv ../$OLD_NAME ../$NEW_NAME

# Update file contents
find ../$NEW_NAME -type f -exec sed -i "s/$OLD_NAME/$NEW_NAME/g" {} +
find ../$NEW_NAME -type f -exec sed -i "s/$OLD_NAMESPACE/$NEW_NAMESPACE/g" {} +

# Rename files and folders containing the old name
find ../$NEW_NAME -depth -name "*$OLD_NAME*" -execdir bash -c 'mv "$1" "${1//$2/$3}"' -- {} $OLD_NAME $NEW_NAME \;

echo "Extension renamed from $OLD_NAME to $NEW_NAME"
echo "Please review the changes and update any remaining references manually if necessary."
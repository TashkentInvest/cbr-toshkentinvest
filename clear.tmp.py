import os

# Define the directory
directory = r'C:\Users\HP\Desktop\www.cbr.ru\common'

# Loop through each file in the directory
for filename in os.listdir(directory):
    # Check if the file ends with .svg.tmp
    if filename.endswith('.svg.tmp'):
        # Create the new filename by removing the .tmp part
        new_filename = filename[:-8]  # Remove the last 8 characters ('.tmp')
        
        # Define the full path for the old and new filenames
        old_file = os.path.join(directory, filename)
        new_file = os.path.join(directory, new_filename)
        
        # Rename the file
        os.rename(old_file, new_file)
        print(f'Renamed: {old_file} to {new_file}')

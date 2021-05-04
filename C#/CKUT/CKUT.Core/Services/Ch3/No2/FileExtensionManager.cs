namespace CKUT.Core.Services.Ch3.No2
{
    public class FileExtensionManager
    {
        public bool IsValid(string fileName)
        {
            //Read File
            var fileSystem = new FileSystem();
            //If file system support this file extension, return true;
            return fileSystem.IsValid(fileName);
        }
    }
}
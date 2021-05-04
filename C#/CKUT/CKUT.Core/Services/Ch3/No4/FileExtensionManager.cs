namespace CKUT.Core.Services.Ch3.No4
{
    public class FileExtensionManager : IFileExtensionManager
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
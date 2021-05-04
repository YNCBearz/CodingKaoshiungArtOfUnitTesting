using System;

namespace CKUT.Core.Services.Ch3.No1
{
    public class LogAnalyzer
    {
        public bool IsValidFileName(string fileName)
        {
            //Read File
            var fileSystem = new FileSystem();
            //If file system support this file extension, return true;
            return fileSystem.IsValid(fileName);
        }
    }
}

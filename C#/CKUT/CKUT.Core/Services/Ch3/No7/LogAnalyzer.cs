using System;

namespace CKUT.Core.Services.Ch3.No7
{
    public class LogAnalyzer
    {
        private IFileExtensionManager _fileExtensionManager;

        public LogAnalyzer()
        {
            _fileExtensionManager = new ExtensionManagerFactory().Create();
        }

        public bool IsValidFileName(string fileName)
        {
            try
            {
                return _fileExtensionManager.IsValid(fileName);
            }
            catch (Exception e)
            {
                return false;
            }
        }
    }
}

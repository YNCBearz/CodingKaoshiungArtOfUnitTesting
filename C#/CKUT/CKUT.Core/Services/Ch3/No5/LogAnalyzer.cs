using System;

namespace CKUT.Core.Services.Ch3.No5
{
    public class LogAnalyzer
    {
        private IFileExtensionManager _fileExtensionManager;

        public LogAnalyzer(IFileExtensionManager fileExtensionManager)
        {
            _fileExtensionManager = fileExtensionManager;
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
